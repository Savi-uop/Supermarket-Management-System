<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BillController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('ProductModel');        //model
        $this->load->model('BillModel'); 
        $this->load->helper('url');      
    }

    public function index()
    {
        $this->load->view('Dashboard/bill/searchProducts');
    }

    // public function getBillNo()

    // {
    //     $bill_no = $this->input->post('bill_no');
    //     // var_dump($bill_no);

    //     $bill =array();
    //     $bill['bill1'] = $this->BillModel->getBill($bill_no);
    //     var_dump($bill);

        
        
        
    //     // $this->load->view('Dashboard/bill/billView',$bill);
        
    // }

    public function getProductsList()
    {
        $bill_no = $this->input->post('bill_no');
        // var_dump($bill_no);

        
        $bill = array();
        $bill['bill1'] = $this->BillModel->loadingBillItems($bill_no);
        $bill['id'] =$bill_no;
        $this->load->view('Dashboard/bill/billView',$bill);

    }



}
?>