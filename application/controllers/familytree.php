<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FamilyTree extends CI_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }


	public function index()
	{
		$this->load->view('family');

	}
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################
	##################################################################################

	// public function success()
	// {
	// 	$this->load->library('encrypt');
	// 	$msg = 'admin';
	// 	$key = 'baby_site_admin';
		
	// 	echo $encrypted_string = $this->encrypt->encode($msg, $key);

	// }
}

