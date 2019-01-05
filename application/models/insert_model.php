<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insert_model extends CI_Model {
	
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}
	
	function insert($table,$data){
			$this->db->insert($table, $data);
        }
	
}
/* End of file Insert_model.php */
/* Location: ./application/models/Insert_model.php */