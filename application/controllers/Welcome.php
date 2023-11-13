<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
		/*load database libray manually*/
		$this->load->database();

		/*load database libray manually*/
		$this->load->library('session');

		/*load Model*/
		$this->load->model('model');

	}
	public function index()
	{
		$this->load->view('Home_page');
		if ($this->input->post('collect')) {

			echo"<script>alert('hiiiii')</script>";
			// $email= $this->input->post('email');
			// $pass = $this->input->post('password');

			// echo"<script>alert('$email')</script>";
			// $response = $this->model->User_login($email,$pass);
			// if ($response == true) {
			// 	echo"<script>alert('login succesfull')</script>";
			// 	// redirect('http://localhost:8080/coreigniter_4/Welcome'); 
			// } else {
			// 	echo "Insert error !";
				
			// }
		}

	
	}

	
}
