<?php

class ReportModel extends CI_Model {

    public function __construct()
    {  
        $this->load->database();
    }

    public function filterByDate($date)
    {
        $date;
        //echo $date;
        
        //$this->db->distinct();
        $this->db->select('bill.pro_id,bill.pro_name,sum(bill.quantity) AS quantity ,sum(bill.amount) AS amount');
        $this->db->from('bill');
        $this->db->where('DATE(added_date)',$date);
        $this->db->where('status','complete');
       
    
        $this->db->group_by('pro_id');
        $this->db->order_by('pro_id','DESC');
        
        $query =$this->db->get();
        return $query->result_array();
        
    }


    public function filterByDateRange($date1,$date2)
    {
        $date1;
        $date2;
        
        //echo $date2;

         $this->db->select('bill.pro_id,bill.pro_name,sum(bill.quantity) AS quantity ,sum(bill.amount) AS amount,bill.added_date');
         $this->db->from('bill');

        //$this->db->where('DATE(added_date)' BETWEEN '2012-10-01' AND '2012-10-3');
        
        //$date1 AND $date2

        $this->db->where('DATE(added_date) <=',$date2);
        $this->db->where('DATE(added_date) >=',$date1);
        $this->db->where('status','complete');
        $this->db->group_by('pro_id','DATE(added_date)');
        $this->db->order_by('DATE(added_date)','DESC');
        
        $query =$this->db->get();
        return $query->result_array();
        
    }

    public function filterByMonth($month)
    {
        $month;
        //echo $month;
        //echo month("2021-03-5-20");

        $this->db->select('bill.pro_id,bill.pro_name,sum(bill.quantity) AS quantity ,sum(bill.amount) AS amount');
        $this->db->from('bill');
        $this->db->where('status','complete');
        $this->db->where('MONTH(added_date)',$month);
        
        $this->db->group_by('pro_id','DATE(added_date)');
        $this->db->order_by('DATE(added_date)','DESC');

        $query =$this->db->get();
        return $query->result_array();
    }

    public function filterByYear($year)
    {
        $year;
        $this->db->select('bill.added_date,bill.pro_id,bill.pro_name,sum(bill.quantity) AS quantity,sum(bill.amount) AS amount');
        $this->db->from('bill');
        $this->db->where('YEAR(added_date)',$year);
        $this->db->where('status','complete');

        $this->db->group_by('pro_id','Date(added_date)');
        $this->db->order_by('Date(added_date)');

        $query =$this->db->get();
        return $query->result_array();
    }

    public function checkRoerderLevel($today)
    {
        //echo $today;
        $this->db->distinct();
        $this->db->select('products.id,products.pro_name,products.quantity,products.level');
        $this->db->from('products');
        $this->db->where('products.quantity <= products.level');
        $this->db->order_by('products.id','DESC');
        return $this->db->get()->result_array();;
    }

   //income reports begin with here
    public function  getDailyIncome($date)
    {
        $date;
        //echo '<h4>'.$date.'</h4>';
        //$this->db->distinct();
        $this->db->select('bill_no,sum(bill.quantity) as quantity,sum(bill.amount) AS amount');
        $this->db->from('bill');
        $this->db->where('Date(added_date)',$date);
        $this->db->where('status','complete');
        $this->db->group_by('bill_no');
        $this->db->order_by('bill_no');

        $query1 =$this->db->get();
        return $query1->result_array();

        
    }

    public function  getIncome($date1,$date2)
    {
        $date1;
        $date2;
        $this->db->distinct();
        $this->db->select('Date(bill.added_date) as date,sum(bill.quantity) as quantity,sum(bill.amount) AS amount');
        $this->db->from('bill');
        $this->db->where('DATE(added_date) <=',$date2);
        $this->db->where('DATE(added_date) >=',$date1);
        $this->db->where('status','complete');
        $this->db->group_by('DATE(added_date)');
        $this->db->order_by('DATE(added_date)');

        $query =$this->db->get();
        return $query->result_array();
    }

    
    //income reports end with here

}
?>