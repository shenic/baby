<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {


	// function Main()
	// {
	// 	parent::__construct();
	// 	$this->load->helper(array('form', 'url', 'file'));
	// }

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
		
		$this->load->view('layout/header');
		$this->load->view('main/home');
		$this->load->view('layout/footer');

	}


//###########################################################################

	public function home(){

		
		$this->load->view('layout/header');
		$this->load->view('main/home');
		$this->load->view('layout/footer');

	}

//###########################################################################

	public function album_gallery(){

		$this->load->model('gallery_model');
		$data['albums'] = $this->gallery_model->get_albums();


		$this->load->helper('form');

		$this->load->view('layout/header');
		$this->load->view('main/album_gallery',$data);
		$this->load->view('layout/footer');

	}

//###########################################################################


	public function image_gallery(){

		$this->load->helper('form');
		$data = array();

		if (isset($_GET['a_id']))
		{
			$this->load->model('gallery_model');
			$this->load->library('session');
			
			$data['images'] = $this->gallery_model->get_images($_GET['a_id']);

			$data['albums'] = $this->gallery_model->get_albums();

			$this->load->view('layout/header');
			$this->load->view('main/image_gallery',$data);
			$this->load->view('layout/footer');
		}
	}


//###########################################################################

public function test(){

			$this->load->library('form_validation');

			if (isset($_POST['insert_comment'])) {

			$this->form_validation->set_rules('insert_comment', 'Comments', 'required|xss_clean');

			$this->form_validation->set_rules('hidden_img_id', 'image id', 'required|xss_clean');

			$this->form_validation->set_rules('hidden_user_id', 'user id', 'required|xss_clean');



			if ($this->form_validation->run() == FALSE) {

				$this->load->view('main/image_gallery');
			} else {
				
				$this->load->model('gallery_model');
				$this->gallery_model->insert_image_comments($_POST);
				echo "TRUE";
			}




		}
		else{

			$this->load->view('main/image_gallery');
		}
}


//###########################################################################

public function comm_del(){

	$comm_id = $this->input->post('comm_id');

	$this->load->model('gallery_model');
	$this->gallery_model->delete_image_comments($comm_id);

	echo "TRUE";
}


//###########################################################################

public function add_al(){

			$this->load->library('form_validation');

			if (isset($_POST['album_name'])) {

			$this->form_validation->set_rules('album_name', 'Albums', 'required|xss_clean');

			if ($this->form_validation->run() == FALSE) {

				echo "VFALSE";

			} 
			else {

				$this->load->model('gallery_model');
				$this->gallery_model->insert_alb1($_POST);
				echo "TRUE";
			}




		}
		else{

			echo "FALSE";
		}
}

//###########################################################################



	public function del_album(){

	$del_al = $this->input->post('remove_album');

	$this->load->model('gallery_model');
	$this->gallery_model->delete_album($del_al);

	$this->gallery_model->delete_images($del_al);

	echo "TRUE";


	}
	

//###########################################################################


	public function insert_images(){

	
	$this->load->model('gallery_model');

	
	if($this->input->post('sub_upload'))
				
	{
		$this->gallery_model->do_upload();

	}



	}


//###########################################################################
//###########################################################################
//###########################################################################
//###########################################################################
//###########################################################################
//###########################################################################
//###########################################################################
//###########################################################################
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */