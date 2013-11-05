<?php
class Model_login extends CI_Model {

    function __construct()
    {
        parent::__construct();

       
    }


    public function getData($usrname){

    	$this->db->select('username, password, user_id');
    	$this->db->where('username', $usrname); 
    	$query = $this->db->get('users');
    	$result=$query->result();
    	
    	return $result;	
    }
    ###############################################################

    public function insert_member($array)
    {
       
        $file =$array[0];
        $rela =$array[1];
        $name =$array[2];

        $data = array(
        'fm_name' => $name ,
        'relationship' => $rela ,
        'image_name' => $file
        );

        $this->db->insert('family_tree', $data); 
    }
    ################################################################
     public function getCusn(){

        $this->db->select('*');
        $query = $this->db->get('family_tree');
        $result=$query->result();
        return $result; 
    }
    ############################################################### 
    public function removedata($id)
    {
    $this->db->where('f_member_id', $id);
    $this->db->delete('family_tree');
    } 
    ###############################################################
    public function getmilestone()
    {
       $this->db->select('*');
        $query = $this->db->get('milestone');
        $result=$query->result();
        
        return $result; 

    }   
    ############################################################### 
    public function achievement()
    {
       $this->db->select('*');
        $query = $this->db->get('achievement');
        $result=$query->result();
        
        return $result; 

    }    
    ###############################################################   
    ###############################################################   
    ############################################################### 
    ###############################################################   
       
    
}






?>