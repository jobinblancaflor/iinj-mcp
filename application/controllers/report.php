<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {
	
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
	public function census_report()
	{
		if ($this->flexi_auth->is_logged_in()) 
		{
			
		$this->load->model('select_model');			
		$this->load->library('fpdf');
		
		if($this->input->post('generate_census_report')){
			$congregation = $this->input->post('congregation_condition');
			if($this->input->post('order_condition')=="" or $this->input->post('order_condition')=="Ascending"){
				$order = "ASC";
			}else{
				$order = "DESC";
			}
			$date_from = $this->input->post('date_from');
			$date_to = $this->input->post('date_to');
			if($this->input->post('congregation_condition')==""||$this->input->post('congregation_condition')=="All Congregation"){
				$statement="Select * from census where status = 1 order by census_last_name ".$order.",census_first_name ".$order.",census_congregation ".$order."";
			}else{
				$statement="Select * from census where census_congregation = '".$congregation."' and status = 1 order by census_last_name ".$order.",census_first_name ".$order.",census_congregation ".$order."";
				$census = $this->select_model->select_statement($statement);
				$currentdate = date("M d, Y");

				$pdf = new FPDF('P','mm','A4');
				$pdf->AddPage();
				
				$pdf->SetFont('Times','B',16);
				$pdf->Cell(190,15,'CENSUS REPORT of '. $congregation,0,1,'C');		
				
				$pdf->SetFont('Times','',12);
				$pdf->Cell(190,0,' as of '.$currentdate,0,1,'C');		
				$pdf->Ln(5);	
				$pdf->SetFont('Arial','',12);
				$pdf->Cell(10,7,'No.',1,0,'L');
				$pdf->Cell(75,7,'Full Name',1,0,'L');
				$pdf->Cell(28,7,'Designation',1,0,'L');
				$pdf->Cell(28,7,'Birthday',1,0,'L');
				$pdf->Cell(20,7,'Status',1,0,'L');
				$pdf->Cell(30,7,'Phone',1,1,'L');
				$x = 1;
				foreach($census as $row){
				$pdf->Cell(10,7,$x,1,0,'L');		
				$pdf->Cell(75,7,$row['census_last_name'].', '.$row['census_first_name'].' '.$row['census_middle_name'],1,0,'L');
				$pdf->Cell(28,7,$row['census_designation'],1,0,'L');
				$pdf->Cell(28,7,$row['census_birthday'],1,0,'L');
				if($row['church_status']==1){
					$status = 'Active';
				}else{
					$status = 'Inactive';
				}
				$pdf->Cell(20,7,$status,1,0,'L');
				$pdf->Cell(30,7,$row['census_phone'],1,1,'L');
				$x++;
				}
				
				$pdf->Output();
			}
			//$statement="Select * from census where status = 1 order by census_last_name,census_first_name,census_congregation";
			$census = $this->select_model->select_statement($statement);
			$currentdate = date("M d, Y");

			$pdf = new FPDF('P','mm','A4');
			$pdf->AddPage();
			
			$pdf->SetFont('Times','B',16);
			$pdf->Cell(190,15,'CENSUS REPORT',0,1,'C');		
			
			$pdf->SetFont('Times','',12);
			$pdf->Cell(190,0,' as of '.$currentdate,0,1,'C');		
			$pdf->Ln(5);	
			$pdf->SetFont('Arial','',12);
			$pdf->Cell(10,7,'No.',1,0,'L');
			$pdf->Cell(75,7,'Full Name',1,0,'L');
			$pdf->Cell(28,7,'Designation',1,0,'L');
			$pdf->Cell(30,7,'Congregation',1,0,'L');
			$pdf->Cell(28,7,'Birthday',1,0,'L');
			$pdf->Cell(20,7,'Status',1,1,'L');
			$x = 1;
			foreach($census as $row){
			$pdf->Cell(10,7,$x,1,0,'L');		
			$pdf->Cell(75,7,$row['census_last_name'].', '.$row['census_first_name'].' '.$row['census_middle_name'],1,0,'L');
			$pdf->Cell(28,7,$row['census_designation'],1,0,'L');			
			$pdf->Cell(30,7,$row['census_congregation'],1,0,'L');
			$pdf->Cell(28,7,$row['census_birthday'],1,0,'L');
			if($row['church_status']==1){
				$status = 'Active';
			}else{
				$status = 'Inactive';
			}
			$pdf->Cell(20,7,$status,1,1,'L');
			$x++;
			}
			
			$pdf->Output();
		}
			
		$data = "Select * from congregation order by congregation";
		$this->data["congregation_list"] = $this->select_model->select_statement($data);
		$data = "Select * from designation order by designation";
		$this->data["designation_list"] = $this->select_model->select_statement($data);
		$data = "Select * from country order by country_name";
		$this->data["country_list"] = $this->select_model->select_statement($data);
		$this->load->view('demo/report/census_report', $this->data);
		
		}else {
			redirect('auth');
		}
	}
	
	public function sample_report(){
		
	$this->load->model('select_model');	
	$this->load->library('fpdf');
	$congregation = $this->input->post('congregation');
	$order = $this->input->post('order');
	$date_from = $this->input->post('date_from');
	$date_to = $this->input->post('date_to');
	$statement="Select * from census where status = 1 order by census_last_name,census_first_name,census_congregation";
	$census = $this->select_model->select_statement($statement);
	$currentdate = date("M d, Y");

	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	
	$pdf->SetFont('Times','BU',16);
	$pdf->Cell(190,15,'Census Report as of '.$currentdate,0,1,'C');		
	$pdf->Ln(5);	
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(65,7,'Full Name',1,0,'L');
	$pdf->Cell(30,7,'Designation',1,0,'L');
	$pdf->Cell(30,7,'Birthday',1,0,'L');
	$pdf->Cell(25,7,'Status',1,0,'L');
	$pdf->Cell(40,7,'Phone',1,1,'L');
	foreach($census as $row){
			
	$pdf->Cell(65,7,$row['census_last_name'].', '.$row['census_first_name'].' '.$row['census_middle_name'],1,0,'L');
	$pdf->Cell(30,7,$row['census_designation'],1,0,'L');
	$pdf->Cell(30,7,$row['census_birthday'],1,0,'L');
	if($row['church_status']==1){
		$status = 'Active';
	}else{
		$status = 'Inactive';
	}
	$pdf->Cell(25,7,$status,1,0,'L');
	$pdf->Cell(40,7,$row['census_phone'],1,1,'L');
	}
	
	$pdf->Output();
	}
	public function generate_census_report(){
		
	$this->load->model('select_model');	
	$this->load->library('fpdf');
	$congregation = $this->input->post('congregation');
	$order = $this->input->post('order');
	$date_from = $this->input->post('date_from');
	$date_to = $this->input->post('date_to');
	if($this->input->post('congregation')==""||$this->input->post('congregation')=="")
	$statement="Select * from census where status = 1 order by census_last_name,census_first_name,census_congregation";
	$census = $this->select_model->select_statement($statement);
	$currentdate = date("M d, Y");

	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	
	$pdf->SetFont('Times','BU',16);
	$pdf->Cell(190,15,'Census Report as of '.$currentdate,0,1,'C');		
	$pdf->Ln(5);	
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(65,7,'Full Name',1,0,'L');
	$pdf->Cell(30,7,'Designation',1,0,'L');
	$pdf->Cell(30,7,'Birthday',1,0,'L');
	$pdf->Cell(25,7,'Status',1,0,'L');
	$pdf->Cell(40,7,'Phone',1,1,'L');
	foreach($census as $row){
			
	$pdf->Cell(65,7,$row['census_last_name'].', '.$row['census_first_name'].' '.$row['census_middle_name'],1,0,'L');
	$pdf->Cell(30,7,$row['census_designation'],1,0,'L');
	$pdf->Cell(30,7,$row['census_birthday'],1,0,'L');
	if($row['church_status']==1){
		$status = 'Active';
	}else{
		$status = 'Inactive';
	}
	$pdf->Cell(25,7,$status,1,0,'L');
	$pdf->Cell(40,7,$row['census_phone'],1,1,'L');
	}
	
	$pdf->Output();
	}
}

/* End of file report.php */
/* Location: ./application/controllers/report.php */