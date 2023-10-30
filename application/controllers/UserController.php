<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');        //model
        $this->load->helper('url');      
    }



    public function index()
    {
        $this->load->view('Dashboard/user/userAddForm');
    }
    

    public function addUser()
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
            $user = array();
            
            $user['fname']           =   $this->input->post('fname');
            $user['lname']           =   $this->input->post('lname');
            $user['dob']             =   $this->input->post('dob');
            $user['contact']         =   $this->input->post('contact');
            $user['nic']             =   $this->input->post('nic');
            $user['user_id']         =   $this->input->post('user_id');
            $user['address1']        =   $this->input->post('address1');
            $user['address2']        =   $this->input->post('address2');
            $user['address3']        =   $this->input->post('address3');
            $user['email']           =   $this->input->post('email');
            $user['role']            =   $this->input->post('role');
            $user['gender']          =   $this->input->post('gender');
            $user['description']     =   $this->input->post('description');
            $user['added_date']      =   $this->input->post('added_date');
            $user['edited_date']     =   $this->input->post('edited_date');
            $user['status']          =   $this->input->post('status');
            // $user['image']           =   $this->input->post('image');
            

            $data   =array('image_,metadata'=> $this->upload->data());

            $original   ='';

            foreach($data as $key)
            {
                $original           =   $key['file_name'];
            }

            $user['image']    =  $original;

            // $this->load->model('UserModel');
            $this->UserModel->saveUser($user);

            // $this->load->helper('url');
           
            redirect('UserController/viewUser');
            // var_dump($user);
        }


    }


    public function viewUser()
    {
        // echo 'success';
        $user = array();
        $user['user1'] = $this->UserModel->getUser();
        
        $this->load->view('Dashboard/user/viewUserTable',$user);
    }


    public function editUser($id)
    {
        $data = array();
        $userid  = $id;
       
        $data['detail']=$this->UserModel->getById($userid);
        // var_dump($data['detail']);
        $data['roles'] = array(0=>"Owner",1=>"Administrator",2=>"Manager",3=>"Cashier");
        // var_dump($data['roles']);
        $this->load->view('Dashboard/user/editUserForm',$data);
        
    }


    public function updateUser()
    {
            $user = array();

            $user['id']             =  $this->input->post('id');
            $user['fname']          =  $this->input->post('fname');
            $user['lname']          =  $this->input->post('lname');
            $user['dob']            =  $this->input->post('dob');
            $user['contact']        =  $this->input->post('contact');
            $user['nic']            =  $this->input->post('nic');
            $user['user_id']        =  $this->input->post('user_id');
            $user['address1']       =  $this->input->post('address1');
            $user['address2']       =  $this->input->post('address2');
            $user['address3']       =  $this->input->post('address3');
            $user['email']          =  $this->input->post('email');
            $user['role']           =  $this->input->post('role');
            $user['gender']         =  $this->input->post('gender');
            // $user['image']          =  $this->input->post('image');
            $user['description']    =  $this->input->post('description');
            $user['added_date']     =  $this->input->post('added_date');
            $user['edited_date']    =  $this->input->post('edited_date');
            $user['status']         =  $this->input->post('status');
           
            // if(empty($_FILES['image']["name"])){
            //     echo "success";
            // }else{
            //     echo "fail";
            // }
                
            // var_dump ( $_FILES['image']); 
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
                   $user['image']    = $this->input->post('image');
                   unlink("upload/".$user['image']);
                   $data    =array('image_metadata'=> $this->upload->data());
                
                   $original    ='';
                   foreach($data as $key)
                   {
                       $original    =$key['file_name'];
                   }

                   $user['image']    =$original;
                   $update  =$this->UserModel->updating($user);
                }

            }
            else
            {
                
                // $user['image']    =$this->input->post('image');
                $update  = $this->UserModel->updating($user);
                
            }
            // var_dump($user);
            redirect('UserController/viewUser');
    }


    public function deleteUser($id)
    {
        $userid   =$id;
        $this->load->model('UserModel');
        $detail =$this->UserModel->getById($userid);
        // var_dump($detail);
        $del    =$this->UserModel->delete($userid);
        // var_dump($del);
        
        if ($del == TRUE)
        {
            unlink("upload/".$detail->image);
        }

        $this->load->helper('url');
        redirect('UserController/viewUser');
    }


}
?>