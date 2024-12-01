<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentProfile extends CI_Controller {
	
	function __construct(){
		
		parent::__construct();

		$this->load->model('student','',TRUE);
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		$stdId = $this->session->userdata['logged_in']['id'];
		$data['student_data'] = $this -> student -> getStudentData($stdId);

		$this->load->view('student_header_logged');
		$this->load->view('edit_student_view', $data);
		$this->load->view('footer');
	}

}//end of class