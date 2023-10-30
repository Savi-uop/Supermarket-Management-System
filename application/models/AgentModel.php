<?php

class AgentModel extends CI_Model {

    public function __construct()
    {  
        $this->load->database();
    }

    public function saveAgent($agent)
    {
        $this->db->insert('agent',$agent);
    }


    public function getAgent($agent_name=FALSE)
    {
        if($agent_name== FALSE)
        {
            $query =$this->db->get('agent');
            return $query->result_array();
        }

        $query = $this->db->get_where('agent',array('id'=>$agentid));
        return $query->row_array();
    }


    public function getById($agentId)
    {
        // echo $catId;
        $query = $this->db->get_where('agent',array('id'=>$agentId));
        return $query->row();
    }


    public function updating($agent)
    {
        $update = $this->db->update('agent',$agent,array('id'=>$agent['id']));
        return $update; 
    }


    public function deleteAgent($agentid)
    {
        $this->db->delete('agent',array('id'=>$agentid));
        return TRUE;
    }


    // By here starting the contact_person related funtions

    public function saveContactPerson($con)
    {
        $this->db->insert('contact_person',$con);

    }


    public function getContactPerson($fname=FALSE)
    {
        if($fname== FALSE)
        {
            $query =$this->db->get('contact_person');
            return $query->result_array();
        }

        $query = $this->db->get_where('contact_person',array('id'=>$conid));   // to to..
        return $query->row_array();
    }


    public function getByIdContactPerson($conId)
    {
        $conId;
        $query = $this->db->get_where('contact_person',array('id'=>$conId));
        return $query->row();
    }


    public function updatingContactPerson($con)
    {
        $update = $this->db->update('contact_person',$con,array('id'=>$con['id']));
        return $update; 
    }

    public function deleteContactPerson($conid)
    {
        $this->db->delete('contact_person',array('id'=>$conid));
        return TRUE;
    }

    public function getRelatedContactPersons($id)
    {
        $id;
        $query =$this->db->get_where('contact_person',array('agent_id'=>$id));
        return $query->result_array();
    }

    public function getAgentRow($id)
    {
        $id;
        //echo $id;
        $query =$this->db->get_where('agent',array('id'=>$id));
        return $query->row_array();
    }

}


?>