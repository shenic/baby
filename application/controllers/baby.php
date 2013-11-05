<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Baby extends CI_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
            $this->load->library('session');
            $this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('image_lib');
       }

	##################################################################################
	public function index()
	{
		$id = $this->session->userdata('user_id');

		if (empty($id)){
			if (isset($_POST['submit'])) 
				{
					$email=$this->input->post('email');
					$this->load->library('form_validation');
					$this->form_validation->set_rules('email', 'Emails', 'required|xss_clean');
					$this->form_validation->set_rules('password', 'Password', "required|xss_clean|callback_pasword_check[$email]");

						if ($this->form_validation->run() == FALSE)
							{
								$this->load->view('view_login');
								
							}
						else
							{
								redirect('baby/home');
							}
				}
				else
				{
					$this->load->view('view_login');
				}			
			}
			else
			{
				redirect('baby/home');
			}
		}
	##################################################################################

	public function pasword_check($password,$email)
	{
		$this->load->model('model_login');
		$result = $this->model_login->getData($email);

		if(empty($result[0]->password))
		{
			$this->form_validation->set_message('pasword_check', 'The Email or %s is invalide');
			return FALSE;
		}
		else{
		$dbpassword =$result[0]->password;
		$this->load->library('encrypt');
		$encrypted_string = 'baby_site_admin';
		$dbpassword = $this->encrypt->decode($dbpassword,$encrypted_string);

		if ($password == $dbpassword)
		{
			$u_id = $result[0]->user_id;
			$this->session->set_userdata('user_id', $u_id);
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
	public function home()
	{

		$id = $this->session->userdata('user_id');

		if (empty($id)){
			redirect('baby');
		}
		else
		{
			$this->load->view('home');
		}

	}
	
	##################################################################################
	public function logout(){
	
	if(isset($_POST['logout'])){
		$this->session->unset_userdata('user_id');
		redirect('baby');
	}

	}
	##################################################################################
	public function family()
	{
		$id = $this->session->userdata('user_id');

		if (empty($id)){
			redirect('baby');
		}
		else
		{
			$this->load->view('family');

		}

	}
	##################################################################################
	public function do_upload(){

		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2048';
		$config['max_width']= '3000';
		$config['max_height']= '2500';

		$this->load->library('upload', $config);
		$field_name = "image_upoad";

		if ($this->upload->do_upload($field_name)){

			$files = $this->upload->data();
			$relationship=$this->input->post('relationship');
			$name=$this->input->post('name');
		
			$insert = array(0 => $files['file_name'],  1 => $relationship, 2 => $name);

			$this->load->model("model_login");

			 $this->model_login->insert_member($insert);

			 echo'Member Added';


			 $files = $this->upload->data();

			/* creating image thumb */
			$config['image_library'] = 'gd';
			$config['source_image'] ='./assets/uploads/'.$files['file_name'];
			$config['new_image']='./assets/uploads/thumbs';
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 106;
			$config['height'] =100;

			$this->image_lib->initialize($config);

			if (!$this->image_lib->resize()){
			echo $this->image_lib->display_errors('<p>', '</p>');
			}
			

		}
		else{
			
			echo  $this->upload->display_errors();

		}

	}

	##################################################################################
	public function relational()
	{
		$this->load->model('model_login');
		$result = $this->model_login->getCusn();
		$array_count = count($result);
		$array_count;
		if(!empty($result[0]->f_member_id))
		{
			$data= array();
			$data['c_name']=$result;

			$this->load->view('familtytree',$data);

		}
		
	}	
	##################################################################################
	public function milestone()
	{
		$this->load->model('model_login');
		$result = $this->model_login->getmilestone();
		
		$data= array();
		$data['milestone_data']=$result;
		$this->load->view('milestone',$data);



	}
	##################################################################################
	public function achievement()
	{
		$this->load->model('model_login');
		$result = $this->model_login->achievement();
		$data= array();
		$data['achievement']=$result;
		$this->load->view('achievement',$data);
			
	}
	##################################################################################
	public function setPrivilege()
	{

		$this->load->view('admin/privilege');
		
		if(isset($_POST['submit']))
		{
			
			print_r($_POST);
			
		}
		else
		{
			echo '1';
		}
		//
		
	}
	
	##################################################################################
	public function addUser()
	{
		

		 if (isset($_POST['submit'])) 
		{


		$f_name=$this->input->post('f_name');
		$s_name=$this->input->post('s_name');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$r_password=$this->input->post('r_password');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('f_name', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('s_name', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean|min_length[6]|max_length[12]');
		$this->form_validation->set_rules('r_password', 'Confirm Password', 'required|xss_clean|min_length[6]|max_length[12]|matches[password]');
			if ($this->form_validation->run() == FALSE)
							{
								
							$this->load->view('admin/add_user');
								
							}
						else
							{
								$this->load->library('encrypt');
								$password1= $password;
								$msg = 'baby_site_admin';
								$encrypted_string = $this->encrypt->encode($msg);

								$encrypted_string = 'baby_site_admin';
								$dbpassword = $this->encrypt->encode($password1,$encrypted_string);

		
								$data = array();
								$data[0]=$f_name;
								$data[1]=$s_name;
								$data[2]=$email;
								$data[3]=$dbpassword;


								$this->load->model('admin_model');
								$this->admin_model->addUser($data);
								
							}
				

		}
		else
		{
			$this->load->view('admin/add_user');
		}
		

		
	}
	##################################################################################
}

