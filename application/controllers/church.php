<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Church extends CI_Controller {
	
	function __construct() 
    {
        parent::__construct();
		
		// To load the CI benchmark and memory usage profiler - set 1==1.
		if (1==2) 
		{
			$sections = array(
				'benchmarks' => TRUE, 'memory_usage' => TRUE, 
				'config' => FALSE, 'controller_info' => FALSE, 'get' => FALSE, 'post' => FALSE, 'queries' => FALSE, 
				'uri_string' => FALSE, 'http_headers' => FALSE, 'session_data' => FALSE
			); 
			$this->output->set_profiler_sections($sections);
			$this->output->enable_profiler(TRUE);
		}
		
		// Load required CI libraries and helpers.
		$this->load->database();
		$this->load->library('session');
 		$this->load->helper('url');
 		$this->load->helper('form');
		$this->load->helper('date');
		

  		// IMPORTANT! This global must be defined BEFORE the flexi auth library is loaded! 
 		// It is used as a global that is accessible via both models and both libraries, without it, flexi auth will not work.
		$this->auth = new stdClass;
		
		// Load 'standard' flexi auth library by default.
		$this->load->library('flexi_auth');	
		
     	// Redirect users logged in via password (However, not 'Remember me' users, as they may wish to login properly).
		if ($this->flexi_auth->is_logged_in_via_password() && uri_string() != 'auth/logout') 
		{
			// Preserve any flashdata messages so they are passed to the redirect page.
			if ($this->session->flashdata('message')) { $this->session->keep_flashdata('message'); }
			
			// Redirect logged in admins (For security, admin users should always sign in via Password rather than 'Remember me'.
			/*if ($this->flexi_auth->is_admin()) 
			{
				redirect('auth_admin/dashboard');
			}
			else
			{
				redirect('auth_public/dashboard');
			}*/
		}
		
		// Note: This is only included to create base urls for purposes of this demo only and are not necessarily considered as 'Best practice'.
		$this->load->vars('base_url', 'http://localhost/iinj/index.php/');
		$this->load->vars('includes_dir', 'http://localhost/iinj/includes/');
		$this->load->vars('current_url', $this->uri->uri_to_assoc(1));
		
		// Define a global variable to store data that is then used by the end view page.
		$this->data = null;
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('select_model');		
		$data = "Select * from congregation order by congregation";
		$this->data["congregation"] = $this->select_model->select_statement($data);
		$this->load->view('demo/church_list', $this->data);
	}
	
	public function attendance($congregation_id)
	{
		if ($this->flexi_auth->is_logged_in()){
		date_default_timezone_set('Asia/Manila');
		$this->load->model('select_model');	
		
		$this->load->model('insert_model');
		$this->load->model('custom_model');
		$this->load->model('delete_model');
		$this->data['congregation_list']= $this->custom_model->get_congregations();
		$datestring = ' %h:%i:%s %A';
		$datestring2 = ' %Y-%m-%d';
		$time = time();		
		$date_today = mdate($datestring2, $time);
		//echo mdate($datestring2, $time)	;	
		if ($this->input->post('register_attendance'))
		{	
			$data = array(
					"census_id" => $this->input->post('census_id'),
					"time" => mdate($datestring, $time),
					"date" => mdate($datestring2, $time),
					"designation" =>"member"					
			);
			$this->insert_model->insert("attendance",$data);
			unset($_POST);
			
			//print_r($data);
			
		}else if ($this->input->post('register_visitor_attendance'))
		{	
			$data = array(
					"visitor_id" => $this->input->post('visitor_id'),
					"time" => mdate($datestring, $time),
					"date" => mdate($datestring2, $time),
					"designation" =>"visitor"					
			);
			$this->insert_model->insert("attendance",$data);
			unset($_POST);
			
			//print_r($data);
			
		}else if ($this->input->post('delete_attendance')){
			$this->delete_model->delete("attendance","attendance_id",$this->input->post('attendance_id'));
			
		}else if ($this->input->post('delete_visitor_attendance')){
			$this->delete_model->delete("attendance","attendance_id",$this->input->post('attendance_id'));
			
		}else if ($this->input->post('add_visitor')){
			echo $this->input->post('visitor_name');
			echo $this->input->post('visitor_congregation');
			$data = array(
					"full_name" => $this->input->post('visitor_name'),
					"congregation" => $this->input->post('visitor_congregation')					
			);
			//print_r($data);
			//$this->insert_model->insert("visitor",$data);
		}
		
		
		 $statement = "select * from census where status=1";
		 $this->data["census_list"] = $this->select_model->select_statement($statement);
		 
		 $statement = "select * from visitor a join congregation b where a.from_congregation=b.congregation and b.congregation_id = ".$congregation_id."";
		 $this->data["visitor_list"] = $this->select_model->select_statement($statement);
		
		 $statement = "select congregation from congregation where congregation_id = '".$congregation_id."' ";
		 $congregation_data = $this->select_model->select_statement($statement);
		 $this->data["congregation"] = $this->select_model->select_statement($statement);
		 foreach($congregation_data as $row){}
		
		$attendance_table= array();
		$da = array();		
		$data = "select * from census where census_congregation='".$row["congregation"]."' and status = 1 order by census_first_name";
		$census = $this->select_model->select_statement($data);

		
		foreach($census as $row_census){		 
			$attendance_query = "select * from attendance where census_id = ".$row_census['census_id']." and date ='".$date_today."' ";
			$attendance = $this->select_model->select_statement($attendance_query);
			
			$da = array(
				"census_id" => $row_census['census_id'],
				"attendance_id" => "",
				"full_name" => $row_census['census_first_name']." ".$row_census['census_middle_name']." ".$row_census['census_last_name'],
				"time" => ""
			);
			foreach($attendance as $data_row){
				$id2 = $data_row['time'];
				$da = array(
				"census_id" => $row_census['census_id'],
				"attendance_id" => $data_row['attendance_id'],
				"full_name" => $row_census['census_first_name']." ".$row_census['census_middle_name']." ".$row_census['census_last_name'],
				"time" => $data_row['time']
				
			);
			} 
			array_push($attendance_table,$da);
		}
		
		$attendance_table2= array();
		$da2 = array();		
		$data2 = "select * from visitor where visited_congregation='".$row["congregation"]."' and status = 1";
		$visitor = $this->select_model->select_statement($data2);

		
		foreach($visitor as $row_visitor){		 
			$attendance_query = "select * from attendance where visitor_id = ".$row_visitor['visitor_id']." and date ='".$date_today."' ";
			$attendance = $this->select_model->select_statement($attendance_query);
			
			$da2 = array(
				"visitor_id" => $row_visitor['visitor_id'],
				"attendance_id" => "",
				"full_name" => $row_visitor['full_name'],
				"time" => ""
			);
			foreach($attendance as $data_row){
				$id2 = $data_row['time'];
				$da2 = array(
				"visitor_id" => $row_visitor['visitor_id'],
				"attendance_id" => $data_row['attendance_id'],
				"full_name" => $row_visitor['full_name'],
				"time" => $data_row['time']
				
			);
			} 
			array_push($attendance_table2,$da2);
		}
		$this->data["attendance"] = $attendance_table;
		$this->data["visitor_list"] = $attendance_table2;
		 
		$this->load->view('demo/attendance', $this->data);
		}else{
			redirect('auth');
		}
	}
	
	public function view_attendance($congregation_id){
			
		if ($this->flexi_auth->is_logged_in()){
			$this->load->model('insert_model');
			$data = array(
					"full_name" => $this->input->post('visitor_name'),
					"from_congregation" => $this->input->post('visitor_congregation'),				
					"visited_congregation" => $this->input->post('visited_congregation'),				
			);
			//echo $this->input->post('visitor_name');
			//echo $this->input->post('visitor_congregation');
			//print_r($data);
			$this->insert_model->insert("visitor",$data);
			echo "You have successfully added a visitor";
		
	}else{
			redirect('auth');
		}

	
	}
	

	public function add_visitor(){
			
		if ($this->flexi_auth->is_logged_in()){
		$this->load->model('insert_model');
			$data = array(
					"full_name" => $this->input->post('visitor_name'),
					"from_congregation" => $this->input->post('visitor_congregation'),				
					"visited_congregation" => $this->input->post('visited_congregation'),				
			);
			//echo $this->input->post('visitor_name');
			//echo $this->input->post('visitor_congregation');
			//print_r($data);
			$this->insert_model->insert("visitor",$data);
			echo "You have successfully added a visitor";
		
	}else{
			redirect('auth');
		}

	
	}
	public function pastoral(){
		
		$this->load->model('custom_model');
		$this->load->model('select_model');
		
		$data = "select * from census where status = 1";
		$this->data['census_list'] = $this->select_model->select_statement($data);
		$this->data['congregation_list']= $this->custom_model->get_congregations();
		if ($this->input->post('register_pastoral'))
		{	
		$this->load->model('insert_model');
			$data = array(
					"full_name" => $this->input->post('full_name'),
					"congregation" => $this->input->post('congregation'),								
					"phone" => $this->input->post('phone'),								
			);
		$this->insert_model->insert("pastoral_academy",$data);	
		}
				
		$this->load->view('demo/pastoral_register', $this->data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */