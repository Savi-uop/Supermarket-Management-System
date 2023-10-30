<?php

class UserModel extends CI_Model {

    public function __construct()
    {  
        $this->load->database();
    }


    public function saveUser($user)
    {
        $this->db->insert('staff',$user);
        // echo '123';
    }


    public function getUser($fname=FALSE)
    {
        if($fname== FALSE)
        {
            $query =$this->db->get('staff');
            return $query->result_array();
        }

        $query = $this->db->get_where('staff',array('id'=>$userid));
        return $query->row_array();
    }


    public function getById($userId)
    {
        // echo $userId;
        $query = $this->db->get_where('staff',array('id'=>$userId));
        return $query->row();
    }


    public function updating($user)
    {
        $update = $this->db->update('staff',$user,array('id'=>$user['id']));
        return $update; 
    }

    public function delete($userid)
    {
        $this->db->delete('staff',array('id'=>$userid));
        return TRUE;
    }




}

?>
