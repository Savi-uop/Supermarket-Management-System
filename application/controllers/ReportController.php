<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');        //model
        $this->load->model('CategoryModel'); 
        $this->load->model('ReportModel'); 
        $this->load->model('BillModel'); 
        $this->load->helper('url');      

        if(!isset($this->data['fname']) || $this->data['user']->company != 'ADMIN'){
            redirect('auth/login');
            //echo 'indika';
        }

    }



    public function index()
    {
       
        $this->load->view('Dashboard/report/reportingHome',$this->data);
        
    }


    //in here we get products list those are out of stock
    public function ProductsReport()
    {
        $today = date('Y-m-d');
        $this->data['outOfStock'] = $this->ReportModel->checkRoerderLevel($today);
        $this->data['date'] =$today;
        //var_dump( $data['outOfStock']);
        $this->load->view('Dashboard/report/outOfStockList',$this->data);
    }

    //related to sales reports
    public function SalesReports()
    {
        $this->load->view('Dashboard/report/reportingMenu1',$this->data);
        
    }

    public function ReportHandling()
    {
        $date= $this->input->post('date');
        $date1= $this->input->post('date1');
        $date2= $this->input->post('date2');
        $month= $this->input->post('month');
        $year= $this->input->post('year');
        $type= $this->input->post('report');
        // echo $date1.'<br>';
        // echo $month.'<br>';
        // echo $type;
       

        if($type == 'daily'){
            
            $this->data['sold_items'] = $this->ReportModel->filterByDate($date);
            //var_dump($data['sold_items']);
            $this->data['date'] =$date;
           $this->load->view('Dashboard/report/dailySalesReport',$this->data);

        }elseif($type == 'weekly'){

            $this->data['sold_items'] =$this->ReportModel->filterByDateRange($date1,$date2);
            $this->data['date1'] =$date1;
            $this->data['date2'] =$date2;
            $this->load->view('Dashboard/report/weekReportView',$this->data);
            //var_dump($data['sold_items']);

        }elseif($type == 'monthly'){

            $this->data['sold_items'] =$this->ReportModel->filterByMonth($month);
            //var_dump($data['sold_items']);

                if($month ==1){
                    $this->data['month'] ="January";
                }else if($month ==2){
                    $this->data['month'] ="February";
                }else if($month ==3){
                    $this->data['month'] ="March";
                }else if($month ==4){
                    $this->data['month'] ="April";
                }else if($month ==5){
                    $this->data['month'] ="May";
                }else if($month ==6){
                    $this->data['month'] ="June";
                }else if($month ==7){
                    $this->data['month'] ="July";
                }else if($month ==8){
                    $this->data['month'] ="August";
                }else if($month ==9){
                    $this->data['month'] ="September";
                }else if($month ==10){
                    $this->data['month'] ="October";
                }else if($month ==11){
                    $this->data['month'] ="November";
                }else{
                    $this->data['month'] ="December";
                }


            $this->load->view('Dashboard/report/monthlyReportView',$this->data);

        }else{

            $this->data['sold_items'] =$this->ReportModel->filterByYear($year);
            //var_dump($this->data['sold_items']);
            $this->data['year'] =$year;
            $this->load->view('Dashboard/report/annualReportView',$this->data);
            

        }
        
    }

    //related to income reports
    public function IncomeReports()
    {
        $this->load->view('Dashboard/report/reportingMenu2',$this->data);
    }

    public function IncomeReportHandling()
    {
        $date= $this->input->post('date');
        $date1= $this->input->post('date1');
        $date2= $this->input->post('date2');
        $type= $this->input->post('report');

        $this->data = array();

        if($type == 'daily'){
            
            $this->data['income'] = $this->ReportModel->getDailyIncome($date);
            $this->data['day'] =$date;
            //var_dump($this->data);

            $total =(array_column($this->data['income'], 'amount'));
            //print_r($this->data['total']);
            $sum =0;
            foreach ($total as $key => $value) {
                $sum =$sum + $value;
            }
            //echo $sum;
            $this->data['total'] =$sum;
            $this->load->view('Dashboard/report/dailyIncomeReport',$this->data);

        }else{

            $this->data['income'] =$this->ReportModel->getIncome($date1,$date2);
            $this->data['date1'] = $date1;
            $this->data['date2'] = $date2;
            //var_dump($this->data['income']);

            $total =(array_column($this->data['income'], 'amount'));
            //print_r($this->data['total']);
            $sum =0;
            foreach ($total as $key => $value) {
                $sum =$sum + $value;
            }
            //echo $sum;
            $this->data['total'] =$sum;
            $this->load->view('Dashboard/report/incomeReport',$this->data);    

        }

    }

    public function bar_chart() 
    { 
        $year ='2021';
            $this->db->select('sum(quantity) as quantity,pro_name');
            $this->db->from('bill');
            $this->db->where('YEAR(added_date)' ,$year);
            $this->db->GROUP_BY('pro_id'); 
            $this->db->ORDER_BY('added_date'); 
            $query= $this->db->get();
            $record= $query->result_array();
        $this->data = [];
        $this->data['chart_data'] = $record;
        $this->load->view('Dashboard/report/bar_chart',$this->data);
    }

    public function graph()
    {
        $this->load->view('report/testGraph');
    }

    //get bill edtails
    public function getBill($id)
    {
        $id;
        //echo $id;

        
        $this->data = array();
        $this->data['bill1'] = $this->BillModel->loadingBillItems($id);
        $this->data['id'] =$id;
        $this->load->view('Dashboard/bill/billView',$this->data);

    }


}

?>