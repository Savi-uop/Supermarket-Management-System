<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');        //model
        $this->load->model('CategoryModel'); 
        $this->load->helper('url'); 
        $this->load->model('User_model');     
        //$this->load->helper(array('form', 'url'));
        //$this->load->library('form_validation'); 
    }



    public function index()
    {
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }
        
        
        $cat = array();
        $cat['cat1'] = $this->CategoryModel->getSubCategory();
        $cat['agent'] = $this->CategoryModel->getAgents();
        // var_dump($cat['cat1']);
        //$this->load->view('product/index',$cat);
        $this->load->view('Dashboard/product/addProduct',array_merge($cat,$this->data));
        
    }

    public function dashboard1()
    {
       // $this->load->view('Dashboard/index2');
        
    }

    public function addProduct()
    {
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }
        
        

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
            
                    $pro = array();
                    
                    $pro['pro_name']        =   $this->input->post('pro_name');
                    $pro['pro_id']          =   $this->input->post('pro_id');
                    $pro['retail_price']    =   $this->input->post('retail_price');
                    $pro['selling_price']   =   $this->input->post('selling_price');
                    $pro['description']     =   $this->input->post('description');
                    $pro['quantity']        =   $this->input->post('quantity');
                    $pro['unit']            =   $this->input->post('u');
                    $pro['level']           =   $this->input->post('level');
                    $pro['sub_category']    =   $this->input->post('sub_category');
                    $pro['agent_id']        =   $this->input->post('agent');
                    $pro['added_date']      =   $this->input->post('added_date');
                    $pro['edited_date']     =   $this->input->post('edited_date');
                    $pro['status']          =   $this->input->post('status');
                    // $pro['image']           =   $this->input->post('image');
                    

                    $data   =array('image_,metadata'=> $this->upload->data());

                    $original   ='';

                    foreach($data as $key)
                    {
                        $original           =   $key['file_name'];
                    }

                    $pro['image']    =  $original;

                    // $this->load->model('ProductModel');
                    $this->ProductModel->saveProduct($pro);

                    // $this->load->helper('url');
                
                    redirect('productController/viewProduct');
                    // var_dump($pro);

                
        }

    }



    public function viewProduct()
    {
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }
        $pro = array();
        $pro['product1'] = $this->ProductModel->getProduct();
        //$this->load->view('product/viewProductTable',$pro); 
        //$this->load->view('Dashboard/index2',$pro); 
        // print_r($pro['product1']);
        $this->load->view('Dashboard/product/viewProduct',array_merge($pro,$this->data));
    }



    // to this err 104 line
    public function editProduct($id)
    {
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }
        $data = array();
        $proid  = $id;
       
        $data['detail'] =$this->ProductModel->getById($proid);
        $data['agent'] = $this->CategoryModel->getAgents();
        
        $data['sub_category'] = $this->CategoryModel->getSubCategory();

        // var_dump($data['detail']);
        // var_dump($data['sub_category']);
        
        $data['units'] = array("-"=>"-","g"=>"gram","kg"=>"kilogram","ml"=>"mililiter","L"=>"Liter");
        // $data['units'] = array("-","g","kg","ml","L");
        //var_dump(  $data['units']);

        $data['levels'] =array(0=>"15",1=>"25",2=>"40",3=>"50",5=>"75",6=>"100",7=>"130");
        // var_dump($data['levels']);

        //$this->load->view('product/editProductView',$data);
        $this->load->view('Dashboard/product/editProduct',array_merge($data,$this->data));
        
    }



    public function updateProduct()
    {
            $pro = array();

            $pro['id']             =  $this->input->post('id');
            $pro['pro_name']       =  $this->input->post('pro_name');
            $pro['pro_id']         =  $this->input->post('pro_id');
            $pro['retail_price']   =  $this->input->post('retail_price');
            $pro['selling_price']  =  $this->input->post('selling_price');
            $pro['description']    =  $this->input->post('description');

            $q_mode =$this->input->post('q');
            $curr_quantity = $this->input->post('curr_quantity');

                if($q_mode == 'plus'){
                    $pro['quantity']       =  $this->input->post('quantity')+$curr_quantity;
                }else if($q_mode =='minus'){
                    $pro['quantity']       =  $curr_quantity - $this->input->post('quantity');
                   
                }else{
                    $pro['quantity'] = $this->input->post('curr_quantity');
                }
            
            $pro['unit']           =  $this->input->post('unit');
            $pro['level']          =  $this->input->post('level');
            $pro['sub_category']   =  $this->input->post('sub_category');
            $pro['agent_id']       =  $this->input->post('agent');
            $pro['added_date']     =  $this->input->post('added_date');
            $pro['edited_date']    =  $this->input->post('edited_date');
            $pro['status']         =  $this->input->post('status');
           
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
                   $pro['image']    = $this->input->post('image');
                   unlink("upload/".$pro['image']);
                   $data    =array('image_metadata'=> $this->upload->data());
                
                   $original    ='';
                   foreach($data as $key)
                   {
                       $original    =$key['file_name'];
                   }

                   $pro['image']    =$original;
                   $update  =$this->ProductModel->updating($pro);
                }

            }
            else
            {
                
                // $pro['image']    =$this->input->post('image');
                $update  = $this->ProductModel->updating($pro);
                
            }
            redirect('ProductController/viewProduct');
    }



    public function deleteProduct()
    {
        $proid   = $this->input->post('pro_id');
        $this->load->model('ProductModel');
        $detail =$this->ProductModel->getById($proid);
        // var_dump($detail);
        $del    =$this->ProductModel->delete($proid);
        // var_dump($del);
        
        if ($del == TRUE)
        {
            unlink("upload/".$detail->image);
        }

        $this->load->helper('url');
        redirect('ProductController/viewProduct',$this->data);
    }
     public function viewProductById($id)
    {
        $proid   =$id;
        //$this->load->model('ProductModel');
        $detail =$this->ProductModel->getById($proid);
        echo json_encode($detail);
    }


}

?>