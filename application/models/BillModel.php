<?php

class BillModel extends CI_Model {

    public function __construct()
    {  
        $this->load->database();
        // $this->load->model('ProductModel');       
    
    }

    // public function getBill($bill_no)
    // {
    //     if($pro_name== FALSE)
    //     {
    //         $query =$this->db->get('bill');
    //         return $query->result_array();
    //     }
    // }


    public function loadingBillItems($bill_no)
    {
        $bill_no =$bill_no;
        // var_dump($bill_no);

        // $this->db->select("*");
        // $this->db->from('bill');
        // $this->db->where('bill_no',$bill_no);

       

        $query = $this->db->get_where('bill',array('bill_no'=>$bill_no));
        return $query->result_array();

        
    }
 
}

?>