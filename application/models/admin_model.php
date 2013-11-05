<?php
class Admin_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

       
    }
    public function getData($usrname){

    	$this->db->select('username, password, user_id');
    	$this->db->where('username', $usrname); 
    	$query = $this->db->get('admin');
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
    public function getCusn()
    {
        $this->db->select('*');
        $query = $this->db->get('family_tree');
        $result=$query->result();
        return $result; 
    } 
    ############################################################### 
    public function relation_remove($id)
    {
        $this->db->where('f_member_id', $id);
        $this->db->delete('family_tree'); 

    }   
    #################################################################
     public function milestone($file)
    {
        $data = array(
        'child_age' => $file['child_age'],
        'milestone' => $file['milestone'],
        'description' => $file['description']
        );
         $this->db->insert('milestone', $data); 

         return TRUE;
    }   
    #################################################################

    #################################################################
    public function achievement($file)
    {
         $data = array(
         'title' => $file['achievement'],
         'description' => $file['description'],
         );
         $this->db->insert('achievement', $data);

         return TRUE;
    } 
    ##################################################################
    public function getPassword($id){

        $this->db->select('user_id,username,password');
        $this->db->where('user_id', $id); 
        $query = $this->db->get('admin');
        $result=$query->result();
        
        return $result; 
    }
    ################################################################## 
     public function updatePassword($update){

        $id= $update[0];
        $password= $update[1];
        

       $data = array(
               'password' => $password 
               );

        $this->db->where('user_id', $id);
        $this->db->update('admin', $data); 

        //echo $password;

        //die();

// Produces:
// UPDATE mytable
// SET title = '{$title}', name = '{$name}', date = '{$date}'
// WHERE id = $id
        
        //return $result; 
    }
    ##################################################################
    ##################################################################    
       
    
}






?>