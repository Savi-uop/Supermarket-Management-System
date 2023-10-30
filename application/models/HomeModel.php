<?php

class HomeModel extends CI_Model {

    public function __construct()
    {
       
        $this->load->database();
        $this->load->model('ProductModel');       
        $this->load->model('CategoryModel');
    }

    public function loadingSubCategories($catid)
    {
       
        $this->db->select("sub_category");
        $this->db->from('maincat_subcat');
        $this->db->where('main_category',$catid);

        $query = $this->db->get();
        return $query->result_array();

    }


    public function loadingProducts($subCatId)
    {
        $this->db->distinct();
        $this->db->select("products.*");
        $this->db->from('products');
        $this->db->join('maincat_subcat','maincat_subcat.sub_category=products.sub_category');
        $this->db->where('maincat_subcat.main_category',$subCatId);
        $this->db->where('products.quantity >',0);
        $this->db->group_by('products.id');
        $this->db->order_by('products.id','DESC');

        $query = $this->db->get();
        return $query->result_array();

        // $query = $this->db->get_where('products',in_array($subCatId));            //'sub_category'=>$subCatId
        // return $query->result_array();
    }

    public function CreateNewBill()
    {
        $temp = new stdClass();
        
        $temp->date =date('Y-m-d H:i:s');
        $temp->status = 'pending';
        $this->db->insert('bill_details', $temp);
        $temp->id = $this->db->insert_id();
        log_message('debug', $this->db->last_query());
        return $temp;
    }

    public function getBillDetails($billId)
    {
       
       $query = $this->db->get_where('bill',array('bill_no'=>$billId));
       return $query->result_array();
       
    }

    public function completeBill($arr)
    {
       $update = $this->db->update('bill_details',$arr,array('id'=>$arr['bill_no']));
       
       $this->db->set('status', 'Complete');
       $this->db->where('bill_no', $arr['bill_no']);
       $this->db->update('bill');
       
       
       return $update;
    }

    public function getProIds($billNo,$proId)
    {
       
        $this->db->select("*");
        $this->db->from('bill');
        $this->db->where('bill_no',$billNo);
        $this->db->where('pro_id',$proId);

        $query = $this->db->get();
        return $query->row();

   }

    public function saveQty($quantity,$bill_no,$pro_id,$total_amount)
    {
        $this->db->set('quantity',$quantity);
        $this->db->set('amount',$total_amount);
        $this->db->where('bill_no',$bill_no);
        $this->db->where('pro_id',$pro_id);
        $this->db->update('bill');
        
        return $this->db->affected_rows();

   }

    public function deleteBillProduct($pro_id,$bill_no)
    {
        $this->db->where('pro_id', $pro_id);
        $this->db->where('bill_no', $bill_no);
        $this->db->delete('bill');

   }

    public function getBillByDate($date)
    {
        $aa = 2021-04-29;
        
        $this->db->select("*");
        $this->db->from('bill');
        //$this->db->where('DATE(added_date)','2021-04-29');
        $this->db->where('DATE(added_date)',$date);

        $query = $this->db->get();
        return $query->result_array();

   }

   public function filterPendingBills()
   {
        $today =DATE('Y-m-d');
        $this->db->select('id,bill_no,date');
        $this->db->from('bill_details');
        $this->db->where('status','pending');
        $this->db->where('Date(date)',$today);
        $this->db->order_by('id DESC');

        $query = $this->db->get();
        return $query->result_array();
   }

    
}

?>
