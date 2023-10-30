<?php

class ProductModel extends CI_Model {

    public function __construct()
    {  
        $this->load->database();
    }

    public function saveProduct($pro)
    {
        $this->db->insert('products',$pro);
        // echo '123';
    }
    public function saveBillDetails($product)
    {
        $product    =   $this->db->insert('bill',$product);
       // return $this->db->affected_rows();
        return $product; 
    }
    public function updateBillDetails($id,$product)
    {
        $update = $this->db->update('bill',$product,array('id'=>$id));
       
       // return $update; 
    }
    public function updateQty($id,$tQty)
    {
        
        $this->db->set('quantity',$tQty,FALSE);
        $this->db->where('id' , $id);
        $update =   $this->db->update('products');
        
       // $update = $this->db->update('products',$qty,array('id'=>$id));
        return $update; 
    }

    public function getProduct($pro_name=FALSE)
    {
        
        
        if($pro_name== FALSE)
        {
            // $query =$this->db->get('products');
            // return $query->result_array();
            
            $this->db->from('products');
            $this->db->order_by("id desc");
            $query = $this->db->get(); 
            return $query->result_array();
            
        }

        $query = $this->db->get_where('products',array('id'=>$proid));
        return $query->row_array();
    }

    public function getById($proId)
    {
        $proId;
        $query = $this->db->get_where('products',array('id'=>$proId));
        return $query->row();
    }

    public function updating($pro)
    {
        $update = $this->db->update('products',$pro,array('id'=>$pro['id']));
        return $update; 
    }

    public function delete($proid)
    {
        $this->db->delete('products',array('id'=>$proid));
        return TRUE;
    }


}


?>