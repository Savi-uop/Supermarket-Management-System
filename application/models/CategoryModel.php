<?php

class CategoryModel extends CI_Model {

    public function __construct()
    {  
        $this->load->database();
    }


    public function saveCategory($cat)
    {
        $this->db->insert('category',$cat);
    }


    public function saveSubCategory($cat)
    {
        $this->db->insert('sub_category',$cat);
        $return_id = $this->db->insert_id();
        return $return_id;
    }


    public function saveRelatedCategory($sub_category,$main_category)
    {
        $temp = new stdClass();
        $temp->sub_category = $sub_category;
        $temp->main_category = $main_category;
        $this->db->insert('maincat_subcat',$temp);
        return $temp;
    }


    public function getCategory($cat_name=FALSE)
    {
        if($cat_name== FALSE)
        {
            $query =$this->db->get('category');
            return $query->result_array();
        }

        $query = $this->db->get_where('category',array('id'=>$catid));
        return $query->row_array();
    }


    public function getSubCategory($sub_cat_name=FALSE)
    {
        if($sub_cat_name== FALSE)
        {
            // $query =$this->db->get('sub_category');
            // return $query->result_array();

            $this->db->from('sub_category');
            $this->db->order_by("id desc");
            $query = $this->db->get(); 
            return $query->result_array();

        }

        $query = $this->db->get_where('sub_category',array('id'=>$catid));   // to to..
        return $query->row_array();
    }
    public function getAgents()
    {
        
        $query =$this->db->get('agent');
        return $query->result_array();
        
    }


    public function getById($catId)
    {
        // echo $catId;
        $query = $this->db->get_where('category',array('id'=>$catId));
        return $query->row();
    }

    public function getByIdSub($catId)
    {
        $catId;
        $query = $this->db->get_where('sub_category',array('id'=>$catId));
        return $query->row();
    }


    public function updating($cat)
    {
        $update = $this->db->update('category',$cat,array('id'=>$cat['id']));
        return $update; 
    }

    public function subUpdating($cat)
    {
        $update = $this->db->update('sub_category',$cat,array('id'=>$cat['id']));
        return $update; 
    }


    public function deleteCategory($catid)
    {
        $this->db->delete('category',array('id'=>$catid));
        return TRUE;
    }

    public function deleteSubCategory($catid)
    {
        $this->db->delete('sub_category',array('id'=>$catid));
        return TRUE;
    }

    public function getByWord($word)
    {
        $word;
        $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->where('sub_cat_name',$word);
        //$this->db->where('description',$word);
        $this->db->group_by('id');

        $query =$this->db->get();
        return $query->result_array();
    }

}
?>