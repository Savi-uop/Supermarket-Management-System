<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AgentModel');        //model
        $this->load->helper('url');      
    }


    public function index()
    {
        //$this->load->view('agent/index');
        $this->load->view('Dashboard/agent/addAgent');
    }


    public function addAgent()
    {
        $agent = array();

        $agent['agent_name']   = $this->input->post('agent_name');
        // $agent['agent_id']     = $this->input->post('agent_id');
        $agent['reg_no']       = $this->input->post('reg_no');
        $agent['address']      = $this->input->post('address');
        $agent['contact']      = $this->input->post('contact');
        $agent['head_name']    = $this->input->post('head_name');
        $agent['description']  = $this->input->post('description');
        $agent['added_date']   = $this->input->post('added_date');
        $agent['edited_date']  = $this->input->post('edited_date');
        $agent['status']       = $this->input->post('status');

        $this->AgentModel->saveAgent($agent);
        redirect('AgentController/viewAgent');
    }


    public function viewAgent()
    {
        $agent = array();
        $agent['agent1'] = $this->AgentModel->getAgent();
        //$this->load->view('Agent/viewAgentTable',$agent);
        $this->load->view('Dashboard/agent/viewAgent',array_merge($agent,$this->data));
        // var_dump($agent);
    }


    public function editAgent($id)
    {
        $agentid = $id;
        $this->data['detail'] =$this->AgentModel->getById($agentid);
        //$this->load->view('agent/editAgentView',$detail);
        
        $this->load->view('Dashboard/agent/editAgent',$this->data);
    }


    public function updateAgent()
    {
        $agent = array();

        $agent['id']           = $this->input->post('id');
        $agent['agent_name']   = $this->input->post('agent_name');
        // $agent['agent_id']     = $this->input->post('agent_id');
        $agent['reg_no']       = $this->input->post('reg_no');
        $agent['address']      = $this->input->post('address');
        $agent['contact']      = $this->input->post('contact');
        $agent['head_name']    = $this->input->post('head_name');
        $agent['description']  = $this->input->post('description');
        $agent['added_date']   = $this->input->post('added_date');
        $agent['edited_date']  = $this->input->post('edited_date');
        $agent['status']       = $this->input->post('status');

        $update = $this->AgentModel->updating($agent);
        redirect('AgentController/viewAgent',$agent);

    }


    public function deleteAgent($id)
    {
        $agentid = $id;
        $detail = $this->AgentModel->getById($agentid);
        // var_dump($detail);
        $del = $this->AgentModel->deleteAgent($agentid);

        redirect('AgentController/viewAgent');
    }


    // contactPerson related functions begin here...

    public function loadContactPersonForm($agent_id)
    {
        $agent = array();

        //$agent['agent1'] = $this->AgentModel->getAgent();
        $this->data['agent'] =$this->AgentModel->getAgentRow($agent_id);
        
        //var_dump($this->data['agent']);
       $this->load->view('contactPerson/contactPersonAddForm',$this->data);
    }

    public function addContactPerson()
    {
        $config['upload_path']   = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jfif';
        $config['max_size']      = 100000;
        $config['max_width']     = 3000;
        $config['max_height']    = 3000;
        $config['overide']       = TRUE;

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload('image')) 
        {
            $error = array('error'=> $this->upload->display_errors());
            echo $this->upload->display_errors();
            // var_dump($_FILES['image']);
        }
        else
        {
            $con = array();
            
            $con['agent_id']        =   $this->input->post('agent_id');
            //$con['agent_name']        =   $this->input->post('agent_name');
            $con['fname']           =   $this->input->post('fname');
            $con['lname']           =   $this->input->post('lname');
            $con['nic']             =   $this->input->post('nic');
            
            $con['contact1']        =   $this->input->post('contact1');
            $con['contact2']        =   $this->input->post('contact2');
            $con['added_date']      =   $this->input->post('added_date');
            $con['edited_date']     =   $this->input->post('edited_date');
            $con['status']          =   $this->input->post('status');
           
            

            $data   =array('image_,metadata'=> $this->upload->data());

            $original   ='';

            foreach($data as $key)
            {
                $original           =   $key['file_name'];
            }

            $con['image']    =  $original;

            $this->AgentModel->saveContactPerson($con);

            redirect('AgentController/getContactPersons/'. $con['agent_id'] );
            // var_dump($con);
        }

    }

    public function viewContactPerson()
    {
        $con = array();
        $con['con1'] = $this->AgentModel->getContactPerson();
        $this->load->view('contactPerson/viewContactPersonTable',array_merge($con,$this->data));  
    }


    public function editContactPerson($id)
    {
        $data = array();

        $conid = $id;
        $this->data['detail'] =$this->AgentModel->getByIdContactPerson($conid);
       
        $this->data['agent'] = $this->AgentModel->getAgent();
        // var_dump($data);
        //echo $id;
       $this->load->view('contactPerson/editContactPersonView',$this->data);
    }


    public function updateContactPerson()
    {
            $con = array();
            
            $con['id']              =   $this->input->post('id');
            $con['fname']           =   $this->input->post('fname');
            $con['lname']           =   $this->input->post('lname');
            $con['nic']             =   $this->input->post('nic');
            $con['agent_id']        =   $this->input->post('agent_id');
            $con['contact1']        =   $this->input->post('contact1');
            $con['contact2']        =   $this->input->post('contact2');
            $con['added_date']      =   $this->input->post('added_date');
            $con['edited_date']     =   $this->input->post('edited_date');
            $con['status']          =   $this->input->post('status');


            if(!empty($_FILES['image']["name"]))
            {
                $config['upload_path']   = './upload/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = 100000;
                $config['max_width']     = 3000;
                $config['max_height']    = 3000;
                $config['overide']       = TRUE;

                $this->load->library('upload',$config);

                if (!$this->upload->do_upload('image')) 
                {
                    $error  =array('error'=>$this->upload->display_errors());
                    echo $this->upload->display_errors();
                } else {
                   $con['image']    = $this->input->post('image');
                   unlink("upload/".$con['image']);
                   $data    =array('image_metadata'=> $this->upload->data());
                
                   $original    ='';
                   foreach($data as $key)
                   {
                       $original    =$key['file_name'];
                   }

                   $con['image']    =$original;
                   $update  =$this->AgentModel->updatingContactPerson($con);
                }

            }
            else
            {
                
                $pro['image']    =$this->input->post('image');
                $update  = $this->AgentModel->updatingContactPerson($con);
                
            }
            //var_dump($con);
            redirect('AgentController/getContactPersons/'.$con['agent_id']);
           
            

    }


    public function deleteContactPerson($id)
    {
        $conid   =$id;
        $this->load->model('AgentModel');
        $detail =$this->AgentModel->getByIdContactPerson($conid);
        // var_dump($detail);
        $del    =$this->AgentModel->deleteContactPerson($conid);
        // var_dump($del);
        
        if ($del == TRUE)
        {
            unlink("upload/".$detail->image);
        }

        $this->load->helper('url');
        redirect('AgentController/viewContactPerson');
    }

    public function getContactPersons($id)
    {
        //echo $id;
        //checking agent id and 
        $this->data['con1'] = $this->AgentModel->getRelatedContactPersons($id);
        $this->data['agent_id'] =$id;
       //var_dump($con);
       $this->load->view('contactPerson/viewContactPersonTable',$this->data);  
    }

}


?>