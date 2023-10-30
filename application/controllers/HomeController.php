<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeModel'); 
        $this->load->model('BillModel'); 
        $this->load->model('CategoryModel'); 
        $this->load->model('ProductModel'); 
        $this->load->model('User_model'); 
        
        $this->load->helper('url'); 
             
    }

    public function index()
    {
       //$log_user  =   $this->User_model->get_user($this->data['user']->user_id);
       $this->data['pending_bill'] = array();
       $this->data['mode'] = 1;
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }else{
           
            $data = array();
            //$data['product'] = $this->HomeModel->loadingProducts(6);
            if($this->data['user']->company == 'ADMIN'){
                redirect('productController/viewProduct');
                //$this->load->view('Dashboard/home/adminHome',$this->data);
            }else{
                $this->load->view('Dashboard/home/BillingHomePage',$this->data);
            }
           
        }
    }
    public function adminBillpage()
    {
       if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }
        $this->data['mode'] = 1;
         $this->load->view('Dashboard/home/BillingHomePage',$this->data);
         
    }
    public function pdfs(){
        //load library
        $this->load->library('pdf'); // change to pdf_ssl for ssl
        $filename = "Document_name";
        $html = "indika Rubasinghe";
        $this->pdf->create($html, $filename);
    }
    public function DashBord()
    {
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }
        $data = array();
        $billSammary = $this->HomeModel->CreateNewBill();
        $data['billNo'] =$billSammary->id;
        
        
        $billDetails = $this->HomeModel->getBillDetails($billSammary->id);
        $data['billDetail'] = $billDetails;
        
        $sum    =0.00;
        $data['sum'] = $sum;
        $data['product']     =  $this->HomeModel->loadingProducts(6);
        $data['grocery']     =  $this->HomeModel->loadingProducts(13);
        $data['dairy']       =  $this->HomeModel->loadingProducts(12);
        $data['fruit']       =  $this->HomeModel->loadingProducts(9);
        $data['beverages']   =  $this->HomeModel->loadingProducts(5);
        $data['snak']        =  $this->HomeModel->loadingProducts(7);
        $data['fish']        =  $this->HomeModel->loadingProducts(10);
        $data['spread']      =  $this->HomeModel->loadingProducts(16);
        $data['stationary']  =  $this->HomeModel->loadingProducts(15);
        $data['personal']    =  $this->HomeModel->loadingProducts(8);
        $data['household']   =  $this->HomeModel->loadingProducts(11);
        $data['electric']    =  $this->HomeModel->loadingProducts(17);
        
        $this->load->view('Dashboard/home/BillingPage',array_merge($data,$this->data));
        // $this->load->view('Dashboard/home/cashier');
    }
    public function DashBord1($billId)
    {
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }
        $data = array();
        $data['billNo'] =$billId;
        
        //$bilNo  =   51;
        $billDetails = $this->HomeModel->getBillDetails($billId);
        $data['billDetail'] = $billDetails;
        
            $sum    =0.00;
            
                   foreach($billDetails as $details)
                   {
                       $sum1 =  $details['unit_price']*$details['quantity'];
                       $sum +=  $sum1;
                   }
                   
        $data['sum'] = $sum;
        $data['product']     =  $this->HomeModel->loadingProducts(6);
        $data['grocery']     =  $this->HomeModel->loadingProducts(13);
        $data['dairy']       =  $this->HomeModel->loadingProducts(12);
        $data['fruit']       =  $this->HomeModel->loadingProducts(9);
        $data['beverages']   =  $this->HomeModel->loadingProducts(5);
        $data['snak']        =  $this->HomeModel->loadingProducts(7);
        $data['fish']        =  $this->HomeModel->loadingProducts(10);
        $data['spread']      =  $this->HomeModel->loadingProducts(16);
        $data['stationary']  =  $this->HomeModel->loadingProducts(15);
        $data['personal']    =  $this->HomeModel->loadingProducts(8);
        $data['household']   =  $this->HomeModel->loadingProducts(11);
        $data['electric']    =  $this->HomeModel->loadingProducts(17);
        $this->load->view('Dashboard/home/BillingPage',array_merge($data,$this->data));
        // $this->load->view('Dashboard/home/cashier');
    }
    
    public function billDetails($productNo,$billNo)
    {
       
        $data = array();
        $product = $this->ProductModel->getById($productNo);
        
        $data['bill_no']    =   $billNo;
        $data['pro_id']     =   $product->id;
        $data['pro_name']   =   $product->pro_name;
        $data['quantity']   =   1;
        $data['unit_price'] =   $product->selling_price;
        $data['unit']       =   $product->unit;
        $data['amount']     =   $product->selling_price;
        $data['status']     =   'pending';
        $data['added_date'] =   date('Y/m/d H:i:s');
        $data['edited_date']=   date('Y/m/d H:i:s');
        
        $billDetails = $this->HomeModel->getBillDetails($billNo);
        
        
        $billIds = $this->HomeModel->getProIds($billNo,$data['pro_id']);
            
           //$qty   =   0;
          if(!empty($billIds))
          {
           $data['quantity']   =   $billIds->quantity + 1;
           $data['amount']   =   $data['quantity']*$product->selling_price;
           $result  =   $this->ProductModel->updateBillDetails($billIds->id,$data);
           $qty =   $data['quantity'];
           
           }else{
           $result  =   $this->ProductModel->saveBillDetails($data);
           $qty =   1;
          
          }
           
            $totalQty = $product->quantity-1;
            $this->ProductModel->updateQty($product->id,$totalQty);
            
        echo json_encode($billNo);
        
    }
    

    public function getSubCatId($catid)
    {
       
        // $catid = $id;
        // $catid = 13;

    // var_dump($catid);
        // $cat = array();
        // $cat['cat1'] = $this->CategoryModel->getCategory($catid);
        // var_dump($catid);

        // $query=$this->HomeModel->loadingSubCategories($catid);

        // var_dump($query);
        // print_r($query);

        //$arr =array(14,17,18,19,23,25,26,27,29,30,31);

        $query1 = $this->HomeModel->loadingProducts($catid);
        // var_dump($query1);
        // print_r($query1);

        $data = array();
        $data['query']=$query1;
        
        echo json_encode($query1);
        
       // $this->load->view('Product/searchProduct',$data);
       
    }


    public function loadMoodal()
    {
        $this->load->view('Product/test');
    }


    public function billComplete()
    {   
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }else{
        
            $bill = array();

            $bill['bill_no']        =  $this->input->post('bill_no');
            $bill['total_amount']   =  $this->input->post('sum_val');
            $bill['payment_method'] =  $this->input->post('payment');
            
            $billDetails = $this->HomeModel->getBillDetails($bill['bill_no']);
            $bill['no_of_items']    =   count($billDetails);
            $bill['status']    =   'Complete';
            $bill['date']      =   date('Y/m/d H:i:s');
            $query1 = $this->HomeModel->completeBill($bill);
            
            if($this->data['user']->company == 'ADMIN'){
                redirect('HomeController/adminBillpage');
            }else{
                redirect('HomeController/index');
            }
            
        }
    }

    public function getHoldBills()
    {
        $this->data['mode'] = 2;
        $this->data['pending_bill'] =$this->HomeModel->filterPendingBills();
        //print_r( $bill['pending_bill']);
        $this->load->view('Dashboard/home/BillingHomePage',$this->data);

    }
    
    public function changeQty($proId,$billId)
    {
        $qtyDetails =   $this->HomeModel->getProIds($billId,$proId);
        echo json_encode($qtyDetails);
   }
    public function saveQty()
    {
        $bill = array();
        $quantity    =  $this->input->post('qty');
        $bill_no     =  $this->input->post('bid');
        $pro_id      =  $this->input->post('pid');
        
        $product = $this->ProductModel->getById($pro_id);
        if($product->quantity<$quantity){
            $saveDetails['out'] =   0;
            $saveDetails['limit'] =   $product->quantity;
        }else{
        
            $saveDetails =   $this->HomeModel->getProIds($bill_no,$pro_id);
            $changeQty  =   $quantity-$saveDetails->quantity;
            
            
            $totalQty   =   $product->quantity-$changeQty;
            
            $total_amount = $quantity*$saveDetails->unit_price;
            $saveDetails =   $this->HomeModel->saveQty($quantity,$bill_no,$pro_id,$total_amount);
            
            $this->ProductModel->updateQty($product->id,$totalQty);
        }
        
        echo json_encode($saveDetails);
   }
    public function deleteBillProduct()
    {
        $bill = array();
        $quantity    =  $this->input->post('qty');
        $bill_no     =  $this->input->post('bid');
        $pro_id      =  $this->input->post('pid');
        
        
        
        $saveDetails =   $this->HomeModel->getProIds($bill_no,$pro_id);
        $changeQty  =   $saveDetails->quantity;
        
        $product = $this->ProductModel->getById($pro_id);
        $totalQty   =   $product->quantity+$changeQty;
        
       // $saveDetails =   $this->HomeModel->saveQty($quantity,$bill_no,$pro_id);
        $this->HomeModel->deleteBillProduct($pro_id,$bill_no);
        $this->ProductModel->updateQty($product->id,$totalQty);
        
        
        echo json_encode($saveDetails);
   }
    public function getBillByDate()
    {
        
        $date   =   "2021-04-29";
        $saveDetails =   $this->HomeModel->getBillByDate($date);
        print_r($saveDetails);
        
   }

    public function getProductsList()
    {
        $bill_no = $this->input->post('bill_no');
        // var_dump($bill_no);

        
        //$bill = array();
        $this->data['bill1'] = $this->BillModel->loadingBillItems($bill_no);
        $this->data['id'] =$bill_no;
        $this->data['pending_bill'] =array();
        $this->data['mode'] = 3;
        $this->load->view('Dashboard/home/BillingHomePage',$this->data);

    }

}




?>