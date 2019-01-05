<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Custom_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->config('flexi_auth', TRUE);
		$this->lang->load('flexi_auth');

		###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###
		
		// Sessions and cookies
		$this->auth->session_name = $this->config->item('sessions','flexi_auth');
		$this->auth->cookie_name = $this->config->item('cookies','flexi_auth');
	
		// Get the current auth session, else get the default values
		if ($this->session->userdata($this->auth->session_name['name']) !== FALSE)
		{
			$this->auth->session_data = $this->session->userdata($this->auth->session_name['name']);
		}
		else
		{
			$this->auth->session_data = $this->set_auth_defaults();
		}
		
		// Database tables and settings
		$this->auth->database_config = $database_config = $this->config->item('database','flexi_auth');

		// Prefix each table column with the name of the parent table. 
		foreach($database_config as $table_key => $table_data)
		{
			if (! empty($table_data['table']) && ! empty($table_data['columns']))
			{
				foreach($table_data['columns'] as $column_reference => $column_name)
				{
					$database_config[$table_key]['columns'][$column_reference] = $table_data['table'].'.'.$column_name;
				}

				if (! empty($table_data['custom_columns']))
				{
					$database_config[$table_key]['custom_columns'] = array();

					foreach($table_data['custom_columns'] as $column_reference => $column_name)
					{
						$database_config[$table_key]['custom_columns'][$column_name] = $table_data['table'].'.'.$column_name;
					}
				}
			}
			// Prefix the primary key, foreign key and custom columns of any custom tables. 
			else if ($table_key == 'custom')
			{
				foreach($table_data as $custom_table_key => $table_data)
				{
					if (! empty($table_data['table']) && ! empty($table_data['primary_key']))
					{
						$database_config['custom'][$custom_table_key]['primary_key'] = $table_data['table'].'.'.$table_data['primary_key'];
					}
					if (! empty($table_data['table']) && ! empty($table_data['foreign_key']))
					{
						$database_config['custom'][$custom_table_key]['foreign_key'] = $table_data['table'].'.'.$table_data['foreign_key'];
					}
					if (! empty($table_data['table']) && ! empty($table_data['custom_columns']))
					{
						foreach($table_data['custom_columns'] as $column_reference => $column_name)
						{
							$database_config['custom'][$custom_table_key]['custom_columns'][$column_reference] =  $table_data['table'].'.'.$column_name;
						}
					}
				}
			}
		}

		// User session table
		$this->auth->tbl_user_session = $database_config['user_sess']['table'];
		$this->auth->tbl_join_user_session = $database_config['user_sess']['join'];
		$this->auth->tbl_col_user_session = $database_config['user_sess']['columns'];
		
		// User group table
		$this->auth->tbl_user_group = $database_config['user_group']['table'];
		$this->auth->tbl_join_user_group = $database_config['user_group']['join'];
		$this->auth->tbl_col_user_group = $database_config['user_group']['columns'];
		
		// User privilege tables
		$this->auth->tbl_user_privilege = $database_config['user_privileges']['table'];
		$this->auth->tbl_col_user_privilege = $database_config['user_privileges']['columns'];
		$this->auth->tbl_user_privilege_users = $database_config['user_privilege_users']['table'];
		$this->auth->tbl_col_user_privilege_users = $database_config['user_privilege_users']['columns'];
		
		// User group privilege tables
		$this->auth->tbl_user_privilege_groups = $database_config['user_privilege_groups']['table'];
		$this->auth->tbl_col_user_privilege_groups = $database_config['user_privilege_groups']['columns'];
		
		// User main account table
		$this->auth->tbl_user_account = $database_config['user_acc']['table'];
		$this->auth->tbl_join_user_account = $database_config['user_acc']['join'];
		$this->auth->tbl_col_user_account = array_merge($database_config['user_acc']['columns'], $database_config['user_acc']['custom_columns']);
		#$this->auth->tbl_custom_col_user_account = $database_config['user_acc']['custom_columns']; // Currently unused.

		// User custom data table(s)
		$this->auth->tbl_custom_data = (! empty($database_config['custom'])) ? $database_config['custom'] : array();
		
		// Database settings
		$this->auth->db_settings = $database_config['settings'];

		// Primary user identity column
		$this->auth->primary_identity_col = $database_config['user_acc']['table'].'.'.$database_config['settings']['primary_identity_col'];
		
		// Security settings
		$this->auth->auth_security = $this->config->item('security','flexi_auth');
		
		// General settings
		$this->auth->auth_settings = $this->config->item('settings','flexi_auth');
		
		// Email settings
		$this->auth->email_settings = $this->config->item('email','flexi_auth');
		
		// Set flexi auth SQL clauses
		$this->auth->select = $this->auth->join = $this->auth->order_by = $this->auth->group_by = $this->auth->limit = array();
		$this->auth->where = $this->auth->or_where = $this->auth->where_in = array();
		$this->auth->or_where_in = $this->auth->where_not_in = $this->auth->or_where_not_in = array();
		$this->auth->like = $this->auth->or_like = $this->auth->not_like = $this->auth->or_not_like = array();

		// Status and error messages.
		$this->auth->message_settings = $this->config->item('messages', 'flexi_auth');
		$this->auth->status_messages = array('public' => array(), 'admin' => array());
		$this->auth->error_messages = array('public' => array(), 'admin' => array());
		
		// Global template data.
		$this->auth->template_data = array();
	}
	// The following method prevents an error occurring when $this->data is modified.
	// Error Message: 'Indirect modification of overloaded property Demo_cart_admin_model::$data has no effect'.
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}

	function get_congregations()
    {
        $query = $this->db->query('Select congregation from congregation order by congregation ASC');
        //return $query->result();
		return $query->result_array();
    } 
	function get_designation()
    {
        //$query = $this->db->query('Select designation from designation order by designation ASC');
        //return $query->result();
		$query = $this->db->query('Select designation from designation order by designation ASC');
		return $query->result_array();
    }
	
}
/* End of file custom_model.php */
/* Location: ./application/models/custom_model.php */