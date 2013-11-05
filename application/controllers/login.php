<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }


	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		
		


		if (isset($_POST['submit'])) 
		{
			$username=$this->input->post('username');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', "required|xss_clean|callback_pasword_check[$username]");

			if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('view_login');

					// $username=$this->input->post('username');
					// $password=$this->input->post('password');
				}
			else
				{
				$this->load->view('success');
				}
		}
		else
		{
			$this->load->view('view_login');
		}

	}
	##################################################################################

	public function pasword_check($password,$username)
	{
		$this->load->model('model_login');
		$result = $this->model_login->getData($username);

		if(empty($result[0]->password))
		{
			$this->form_validation->set_message('pasword_check', 'The username or %s is invalide');
			return FALSE;
		}
		else{
		$dbpassword =$result[0]->password;
		$this->load->library('encrypt');
		$encrypted_string = 'baby_site_admin';
		$dbpassword = $this->encrypt->decode($dbpassword,$encrypted_string);

		if ($password == $dbpassword)
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('pasword_check', 'The username or %s is invalide');
			return FALSE;
		}
		}		
	}

	##################################################################################

	// public function success()
	// {
	// 	$this->load->library('encrypt');
	// 	$msg = 'admin';
	// 	$key = 'baby_site_admin';
		
	// 	echo $encrypted_string = $this->encrypt->encode($msg, $key);

	// }
}

