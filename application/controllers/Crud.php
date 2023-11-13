<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

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
    
	// Home Page
	public function index()
	{
		$result['web']=$this->model->website_setting();
		$result['data']=$this->model->display_recordss();
		$result['toy']=$this->model->display_records_toy();
		$result['home']=$this->model->display_records_home_kitchen();
		$this->load->view('Home_page',$result);
		
	}

	// User Home Page
	public function user()
	{
		$result['data']=$this->model->website_setting();
		if ($this->session->userdata('user')) {
			// $v =$this->session->userdata('user');
			// 	 print_r($v); 
			$result['data']=$this->model->display_recordss();
		    $result['toy']=$this->model->display_records_toy();
		    $result['home']=$this->model->display_records_home_kitchen();
		    $this->load->view('user_page',$result);
			
		} else {
			redirect('http://localhost:8080/coreigniter_4/Crud');
		}
	}

	// Sign up Page
	public function sign_up()
	{
		$result['data']=$this->model->website_setting();
		$this->load->view('sign_up');

		if ($this->input->post('save')) {
			$data['first_name'] = $this->input->post('first_name');
			$data['last_name'] = $this->input->post('last_name');
			$data['email'] = $this->input->post('email');
			$data['phone_num'] = $this->input->post('phone_no');
			$data['dob'] = $this->input->post('dob');
			$data['gender'] = $this->input->post('flexRadioDefault');
			$data['address'] = $this->input->post('address');

			$response = $this->model->saverecords($data);
			if ($response == true) {
				echo"<script>alert('login sucessfully')</script>";
				redirect('http://localhost:8080/coreigniter_4/Crud/verify');
				
			} else {
				echo "Insert error !";
				echo"<script>alert('Insert error !')</script>";
			}
		}
	}

	// Login Page
	public function login()
	{
		$result['data']=$this->model->website_setting();
		$this->load->view('login');

		if ($this->input->post('collect')) {
			
			$email= $this->input->post('email');
			$pass = $this->input->post('password');

			$data=$this->model->displayrecordsById($email,$pass);
			
			if($data == true) {
				echo"<script>alert('login sucessfully')</script>";
			     $this->session->set_userdata('user', $email);
				 $v =$this->session->userdata('user');
				 print_r($v);
				
				  redirect('http://localhost:8080/coreigniter_4/Crud/user');
				
			} else {
				echo"<script>alert('Incorrect !')</script>";
			} 
		
		}
	}

	// Home  Payment Page login
	public function checkout_login()
	{
		$result['data']=$this->model->website_setting();
		$this->load->view('login');

		if ($this->input->post('collect')) {
			
			$email= $this->input->post('email');
			$pass = $this->input->post('password');

			$data=$this->model->displayrecordsById($email,$pass);
			
			if($data == true) {
				echo"<script>alert('login sucessfully')</script>";
			     $this->session->set_userdata('user', $email);
				 $v =$this->session->userdata('user');
				 print_r($v);
				
				  redirect('http://localhost:8080/coreigniter_4/Crud/checkout');
				
			} else {
				echo"<script>alert('Incorrect !')</script>";
			} 
		
		}
	}

	// Forget Password Page
	public function forget_password()
	{
		$result['data']=$this->model->website_setting();
		$this->load->view('forget_pass');
	}

	// Verification Email Account Page
	public function verify()
	{
		$result['data']=$this->model->website_setting();
		$this->load->view('verify');

		if ($this->input->post('collect')) {
			$data['email'] = $this->input->post('email_id');
			$response = $this->model->saverecords($data);
			if ($response == true) {
				
				
			} else {
				echo "Insert error !";
				echo"<script>alert('Insert error !')</script>";
			}
		}
	}

	// Verify email by using OTP Page
	public function otp()
	{
		$result['data']=$this->model->website_setting();
		$this->load->view('otp');
		if ($this->input->post('collect')) {
			$otp = $this->input->post('otp');
			$response = $this->model->otp_sent($otp);

			if ($response == true) {
				echo"<script>alert('Login Successfully !')</script>";
				redirect('http://localhost:8080/coreigniter_4/Crud/login');
			} else {
				echo "Insert error !";
				echo"<script>alert('Insert error !')</script>";
			}
		}
	}

	// User Log out Page
	public function log_out()
	{
		echo"<script>alert('login out')</script>";
		session_destroy();
		
		redirect('http://localhost:8080/coreigniter_4/Crud');
	}


	// Home Product View Page
	public function view()
	{
		$result['data']=$this->model->website_setting();
		$result['data']=$this->model->display_records();
		$this->load->view('view_more',$result);
		
	}

	// User Product view Page
	public function view_user()
	{
		if ($this->session->userdata('user')) {
			// $v =$this->session->userdata('user');
			// 	 print_r($v); 
			$result['data']=$this->model->website_setting();
		    $result['data']=$this->model->display_records();
		    $this->load->view('view_user',$result);	
	    }
	}

	// Home Product View Details Page
    public function view_product_detail()
	{
		
		$id=$this->input->get('id');
		$result['data']=$this->model->website_setting();
		$result['data']=$this->model->display_by_id($id);
		$this->load->view('view_product_info',$result);
	}

	// User Product View Details Page
	public function view_product_detail_user()
	{
		if ($this->session->userdata('user')) {
			// $v =$this->session->userdata('user');
			// 	 print_r($v); 
		     $id=$this->input->get('id');
			 $result['data']=$this->model->website_setting();
		    $result['data']=$this->model->display_by_id($id);
		    $this->load->view('view_product_info_user',$result);
	    }
	}

	// User Payment Page
	public function checkout()
	{
		if ($this->session->userdata('user')) {
			// $v =$this->session->userdata('user');
			// 	 print_r($v); 
			$id=$this->input->get('id');
			$result['data']=$this->model->website_setting();
		    $result['data']=$this->model->display_by_id($id);
		    $this->load->view('checkout_page',$result);
		} else {
			redirect('http://localhost:8080/coreigniter_4/Crud/checkout_login');
		}
	}


	public function view_info()
	{
		$id=$this->input->get('id');
		$result['data']=$this->model->website_setting();
		$result['data']=$this->model->display_by_id_info($id);
		$this->load->view('view_product_info',$result);
	}
	
	public function view_info_product()
	{
		if ($this->session->userdata('user')) {
			// $v =$this->session->userdata('user');
			// 	 print_r($v); 
		    $id=$this->input->get('id');
		    $result['data']=$this->model->display_by_id_info($id);
			$result['web']=$this->model->website_setting();
		    $this->load->view('view_product_info_user',$result);
	    }
    }
	
	// public function Product()
	// {
	// 	$result['data']=$this->model->display_records();
	// 	$this->load->view('Product',$result);
		
	// }

	// Admin Dashboard Page
	public function dashboard()
	{
		
		$result['data']=$this->model->website_setting();
		$result['data']=$this->model->users();
		$this->load->view('dashboard',$result);
		
	}
	
	// Admin Product Page
	public function product()
	{
		$result['data']=$this->model->website_setting();
		    $result['data']=$this->model->display_recordss();
		    $result['toy']=$this->model->display_records_toy();
		    $result['home']=$this->model->display_records_home_kitchen();
		$this->load->view('dashboard_product',$result);
		
	}

	// Admin Order Page
	public function Order()
	{
		$result['data']=$this->model->website_setting();
		$result['data']=$this->model->users();
		$this->load->view('dashboard_order',$result);
		
	}

	// Admin Setting  Page
	public function website_setting()
	{
		$result['home']=$this->model->display_records_home_kitchen();
		$result['sport']=$this->model->display_records_toy();
		$result['elec']=$this->model->display_recordss();
		$result['data']=$this->model->website_setting();
		$this->load->view('dashboard_setting',$result);
		if ($this->input->post('save')) {
			$name = $this->input->post('website_name');
			$logo = $this->input->post('website_logo');
			$icon = $this->input->post('website_icon');


			$response = $this->model->update_info($name,$logo,$icon);
			if ($response == true) {
				echo"<script>alert('login sucessfully')</script>";
				
			} else {
				echo "Insert error !";
				echo"<script>alert('Insert error !')</script>";
			}
		}

		if ($this->input->post('collect')) {
			$data['store_name'] = $this->input->post('store_name');
			// $data['store_email'] = $this->input->post('store_email');
			$data['legal_name'] = $this->input->post('legal_name');
			$data['phone'] = $this->input->post('phone');
			$data['street'] = $this->input->post('street');
			$data['apartment'] = $this->input->post('apartment');
			$data['city'] = $this->input->post('city');
			$data['pin_num'] = $this->input->post('pin_num');
			$data['country'] = $this->input->post('country');
			$data['state'] = $this->input->post('state');
			$data['currency'] = $this->input->post('currency');


			$response = $this->model->update__store_info($data);
			if ($response == true) {
				echo"<script>alert('login sucessfully')</script>";
				
			} else {
				echo "Insert error !";
				echo"<script>alert('Insert error !')</script>";
			}
		}
		
	}
	public function payment()
	{
		if ($this->session->userdata('user')) {
		$id=$this->input->get('id');
		$result['data']=$this->model->display_by_id_info($id);
		$this->load->view('payment',$result);
		}
	}

	public function payment_success()
	{
		$this->load->view('payment_success');
		
	}

	public function admin_update_profile()
	{
		$this->load->view('admin_profile');
		
	}
	public function user_update_profile()
	{
		$id=$this->input->get('id');
		$result['data']=$this->model->user_update_profile($id);
		$this->load->view('user_profile',$result);

		if ($this->input->post('update')) {
			$data['first_name'] = $this->input->post('name');
			$data['photo'] = $this->input->post('photo');
			$data['last_name'] = $this->input->post('last_name');
			$data['phone_num'] = $this->input->post('phone_no');
			$data['email'] = $this->input->post('email');
			$data['address'] = $this->input->post('address');
			$data['dob'] = $this->input->post('dob');
			$data['gender'] = $this->input->post('gender');


			$response = $this->model->update__user_info($data,$id);
			if ($response == true) {
				echo"<script>alert('login sucessfully')</script>";
				
			} else {
				echo "Insert error !";
				echo"<script>alert('Insert error !')</script>";
			}
		}
		
	}

	public function user_delete_profile()
	{
		$id=$this->input->get('id');
		$result['data']=$this->model->user_delete_profile($id);
		if ($result == true) {
			echo"<script>alert('Delete sucessfully')</script>";
			redirect('http://localhost:8080/coreigniter_4/Crud/dashboard');
			
			
		} else {
			echo "Insert error !";
			echo"<script>alert('Insert error !')</script>";
		}

	
		
	}
	
	
}