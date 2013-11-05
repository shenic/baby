<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
					$password=$this->input->post('password');
					

					$this->load->library('form_validation');
					$this->form_validation->set_rules('email', 'email', 'required|xss_clean');
					$this->form_validation->set_rules('password', 'Password', "required|xss_clean|callback_pasword_check[$email]");

						if ($this->form_validation->run() == FALSE)
							{
								$this->load->view('admin/admin_login');
								// $username=$this->input->post('username');
								// $password=$this->input->post('password');
							}
						else
							{
								redirect('admin/home');
							}
				}
				else
				{
					$this->load->view('admin/admin_login');
				}			
			}
			else
			{
				redirect('admin/home');
			}
		}
	##################################################################################

	public function pasword_check($password,$email)
	{
		$this->load->model('admin_model');
		
		
		$result = $this->admin_model->getData($email);

		print_r($result);


		if(empty($result[0]->password))
		{
			//print_r($result[0]);
			$this->form_validation->set_message('pasword_check', 'The username or %s is invalide456');
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
			$this->form_validation->set_message('pasword_check', 'The username or %s is invalide123');
			return FALSE;
		}

		}		
	}

	##################################################################################
	public function home()
	{

		$id = $this->session->userdata('user_id');

		if (empty($id)){
			redirect('admin');
		}
		else
		{
			$this->load->view('admin/home');
		}

	}
	
	##################################################################################
	public function logout(){
	
	if(isset($_POST['admin_logout'])){
		$this->session->unset_userdata('user_id');
		redirect('admin');
	}

	}
	##################################################################################
	public function family()
	{
		$id = $this->session->userdata('user_id');

		if (empty($id)){
			redirect('admin');
		}
		else
		{
			$this->load->view('admin/family');

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

			$this->load->model("admin_model");

			 $this->admin_model->insert_member($insert);

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
		$this->load->model('admin_model');
		$result = $this->admin_model->getCusn();
		$array_count = count($result);
		$array_count;
		if(!empty($result[0]->f_member_id))
		{
			$data= array();
			$data['c_name']=$result;

			$this->load->view('admin/familtytree',$data);

		}
		
	}	
	##################################################################################
	public function relation_remove()
	{

		$id = $this->input->post('img_id');
		//echo $id;

		$this->load->model('admin_model');
		$this->admin_model->relation_remove($id);

		echo "TRUE";


	}	
	##################################################################################
	public function milestone()
	{
		$this->load->model('admin_model');


		$this->load->library('form_validation');
		$this->form_validation->set_rules('child_age', 'Child Age', 'required|xss_clean');
		$this->form_validation->set_rules('milestone', 'Milestone', 'required|xss_clean');
		$this->form_validation->set_rules('description', 'Description', 'required|xss_clean');

			$data= array();

			if ($this->form_validation->run() == TRUE)
				{

					
					if(isset($_POST['submit']))
						{	
							$arrayName = array('child_age' => $_POST['child_age'],'milestone' => $_POST['milestone'],'description' => $_POST['description']);
							$this->admin_model->milestone($arrayName);
							
							$error='Record Has been Added';
							$data['e_msg']=$error;

							//print_r($data['error']);

							$this->load->view('admin/milestone',$data);

						}
				}
			else
				{
					$data['e_msg']='';
					$this->load->view('admin/milestone',$data);
				}
		//$result=$this->admin_model->milestone();
	}
	##################################################################################
	public function achievement()
	{

		$this->load->model('admin_model');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('achievement', 'Achievement', 'required|xss_clean');
		$this->form_validation->set_rules('description', 'Description', 'required|xss_clean');

		$data= array();

			if ($this->form_validation->run() == TRUE)
				{
					
		

					
					if(isset($_POST['submit']))
						{	

							$arrayName = array('achievement' => $_POST['achievement'],'description' => $_POST['description']);
							$this->admin_model->achievement($arrayName);
							
							$error='Record Has been Added';
							$data['e_msg']=$error;

						

							$this->load->view('admin/achievement',$data);

						}
				}
			else
				{
					

		

					$data['e_msg']='';
					$this->load->view('admin/achievement',$data);
				}
	}
	##################################################################################
	//ADMIN PASSWORD CHANGE
	public function passwordChange()
	{
		$id = $this->session->userdata('user_id');
		$this->load->model('admin_model');
		$result = $this->admin_model->getPassword($id);

		$data = array();		
			if (!empty($id))
	 		{
				if(isset($_POST['change']))
				{
					$this->load->library('form_validation');
					$this->form_validation->set_rules('password', 'Password', 'required|xss_clean|min_length[6]|max_length[12]');
					$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|xss_clean|min_length[6]|max_length[12]');

					if ($this->form_validation->run() == TRUE)
					{
			 			$c_password=$this->input->post('c_password');
			 			$password=$this->input->post('password');
			 			$confirm_password=$this->input->post('confirm_password');


						$dbpassword =$result[0]->password;

						$this->load->library('encrypt');
						$encrypted_string = 'baby_site_admin';
						$dbpsw = $this->encrypt->decode($dbpassword,$encrypted_string);
		

						if($dbpsw==$c_password)
						{
							if($password==$confirm_password)
							{
								$encrypted_string = 'baby_site_admin';
					 			$password = $this->encrypt->encode($password,$encrypted_string);

					 			$update = array();
					 			$update[0]=$id;
					 			$update[1]=$password;
					 			$this->admin_model->updatePassword($update);
							}
							else
							{
								echo $error1='Password confirmation faild';
								$this->load->view('admin/passwordchange');
							}
						}
						else
						{
							echo $error1='Password Does Not Match';
							$this->load->view('admin/passwordchange');
							
						}
					}
					else
					{
						$this->load->view('admin/passwordchange');
					}
				}
				else
				{
					$this->load->view('admin/passwordchange');
				}	
				
			}
			else
			{
				$this->load->view('admin/passwordchange',$data);
			}

	}
	##################################################################################
	public function pc()
	{
		$this->load->library('encrypt');
		$password='infortec';
		$msg = 'baby_site_admin';
		$encrypted_string = $this->encrypt->encode($msg);

		$encrypted_string = 'baby_site_admin';
		$dbpassword = $this->encrypt->encode($password,$encrypted_string);

			echo $dbpassword ; 

		$encrypted_string = 'baby_site_admin';
		$dbpsw = $this->encrypt->decode($dbpassword,$encrypted_string);

		
		echo  $dbpsw;
		




	}	
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
}

