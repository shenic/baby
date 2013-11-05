<?php


class Gallery_model extends CI_Model {



	var $gallery_path;

	function __construct(){

		parent::__construct();

		$this->gallery_path = realpath(APPPATH . '../assets');
	}



//###############################################################################

	function do_upload(){

		//print_r($_POST);
		

		$config = array(

			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path . '/images'

			);

		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$image_data = $this->upload->data();

		$config = array(

			'source_image' 		=> $image_data['full_path'],
			'new_image' 		=> $this->gallery_path . '/images/thumbs',
			'maintain_ration' 	=> true,
			'width' 			=> 250,
			'height' 			=> 200

			);

		$this->load->library('image_lib', $config);
		$this->image_lib->resize();

	
	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++	


		$upload_insert_array = array(

			'image_dicription' 	=> $_POST['img_dis'],
			'album_id' 			=> $_POST['up_al_hidden'],
			'user_id'			=> $_POST['up_user_hidden'],
			'location' 			=> $image_data['file_name']

			);


		//print_r($upload_insert_array);


		$this->db->insert('images', $upload_insert_array);

	}


//###############################################################################


	function get_albums(){

		$this->db->select('*');
		$this->db->order_by("album_id", "desc"); 
		$query = $this->db->get('image_album');

		$result = $query->result();

		for ($i=0; $i <count($result) ; $i++) { 

			$this->db->select('location');
			$this->db->where('album_id', $result[$i]->album_id);
			$this->db->limit(1);
			$query = $this->db->get('images');
			$al_image = $query->result();

			if (isset($al_image[0]))
			{
				$result[$i]->album_image = $al_image[0]->location;
			}
			else
			{
				$result[$i]->album_image = "empty.jpg";
			}

			
		}



		return $result;
	}


##########################################################################


	function get_images($al_id){


		$this->db->select('*');
		$this->db->order_by("img_id", "desc");
		$this->db->where('album_id', $al_id);
		$query = $this->db->get('images');		
		$result = $query->result();


		for ($i=0; $i < count($result) ; $i++) { 
			
			$this->db->select('comment,comment_id');
			$this->db->where('img_id', $result[$i]->img_id);
			$com = $this->db->get('image_comments');
			$com_result = $com->result();
			$result[$i]->comment = $com_result;

		}


		return $result;
	}

############################################################################


	function insert_image_comments($com1){

		$com_insert  =  array(

			'comment' => $com1['insert_comment'],
			'img_id' => $com1['hidden_img_id'],
			'user_id' => $com1['hidden_user_id']

			);

		$this->db->insert('image_comments', $com_insert);
	}


#############################################################################

	function delete_image_comments($comm_id){
		
		$this->db->where('comment_id', $comm_id);
		$this->db->delete('image_comments');

	}



//###############################################################################

	
	function insert_alb1($al1){

		$a  =  array(

			'album_name' => $al1['album_name'],
			
			);

		$this->db->insert('image_album', $a);
	}



//###############################################################################



function delete_album($remove_album){
		
		$this->db->where('album_id', $remove_album);
		$this->db->delete('image_album');

	}


//###############################################################################

function delete_images($remove_album){
		
		$this->db->where('album_id', $remove_album);
		$this->db->delete('images');

	}






//###############################################################################
//###############################################################################
//###############################################################################
//###############################################################################
//###############################################################################
//###############################################################################
//###############################################################################






}




?>