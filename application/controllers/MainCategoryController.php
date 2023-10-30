<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainCategoryController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CategoryModel');        //model
        $this->load->helper('url');
        $this->load->model('User_model');       
    }


    public function index()
    {
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }
        $this->load->view('Dashboard/addMainCategory',$this->data);
    }   


    public function addCategory()
    {
        
        $cat = array();

        $cat['cat_name']     = $this->input->post('cat_name');
        $cat['cat_id']       = $this->input->post('cat_id');
        $cat['description']  = $this->input->post('description');
        $cat['added_date']   = $this->input->post('added_date');
        $cat['edited_date']  = $this->input->post('edited_date');
        $cat['status']       = $this->input->post('status');

        $this->CategoryModel->saveCategory($cat);
        redirect('MainCategoryController/viewCategory');

        
    }


    public function viewCategory()
    {
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }
        $cat = array();
        $cat['cat1'] = $this->CategoryModel->getCategory();
        //$this->load->view('category/viewCatTable',$cat);
        $this->load->view('Dashboard/mainCategory',array_merge($cat,$this->data));
        // var_dump($cat);
    }


    public function editCategory($id)
    {
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }
        $catid = $id;
        $detail =$this->CategoryModel->getById($catid);
        //$this->load->view('category/editCatView',$detail);
        $this->load->view('Dashboard/editMainCategory',$detail);
    }


    public function updateCategory()
    {
        $cat = array();

        $cat['id']           = $this->input->post('id');
        $cat['cat_name']     = $this->input->post('cat_name');
        $cat['cat_id']       = $this->input->post('cat_id');
        $cat['description']  = $this->input->post('description');
        $cat['added_date']   = $this->input->post('added_date');
        $cat['edited_date']  = $this->input->post('edited_date');
        $cat['status']       = $this->input->post('status');

        $update = $this->CategoryModel->updating($cat);
        redirect('MainCategoryController/viewCategory');

    }


    public function deleteCategory($id)
    {
        $catid = $id;
        $detail = $this->CategoryModel->getById($catid);
        // var_dump($detail);
        $del = $this->CategoryModel->deleteCategory($catid);

        redirect('MainCategoryController/viewCategory');

    }
    

    // sub-category functions  

    public function addSubCategory()
    {
        $cat = array();
       
        $cat['sub_cat_name'] = $this->input->post('subCatName');
        $cat['sub_cat_id']   = $this->input->post('sub_cat_id');
        $cat['description']  = $this->input->post('description');
        $cat['main_category']= 0;
        $cat['added_date']   = $this->input->post('added_date');
        $cat['edited_date']  = $this->input->post('edited_date');
        // $cat['status']    = $this->input->post('status');
  
        // $data['main_cat'] =implode(',',$this->input->post('main_category'));
        // echo $data['main_cat'];
        // var_dump([main_category]);
        $id =$this->CategoryModel->saveSubCategory($cat);
        
        // echo $id 
        $main = $this->input->post('main_category');

        foreach ($main as $key => $value) 
        {
           
            $main_category = $value;
            $sub_category = $id;

            // echo $sub_category."<br>";
            $this->CategoryModel->saveRelatedCategory( $sub_category,$main_category);

        }
        // echo "123";

        // $cat['main_category']= implode(',',$this->input->post('main_category'));
        redirect('MainCategoryController/viewSubCategory');

    }

    public function loadSubCategoryForm()
    {
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }
        $cat = array();
        $cat['cat1'] = $this->CategoryModel->getCategory();
        // var_dump($cat['cat1']);
       //$this->load->view('subcategory/subCatAddForm',$cat);
       $this->load->view('Dashboard/subcategory/addSubCategory',array_merge($cat,$this->data));
    }

    public function viewSubCategory()
    {
        // to do.........................
        $cat = array();
        $cat['cat1'] = $this->CategoryModel->getSubCategory();
        // $cat['select_cat_id'] = explode(',',$cat['cat1']->main_category);
        // /$cat['mainCat'] = $this->CategoryModel->getCategory();
        // var_dump($cat['select_cat_id']);
        
       // $this->load->view('subcategory/viewSubCatTable',$cat);
       $this->load->view('Dashboard/subcategory/viewSubCategory',array_merge($cat,$this->data));
        
    }


    public function editSubCategory($id)
    {
        if(!isset($this->data['fname'])){
            redirect('auth/login');
            //echo 'indika';
        }
        $data = array();

        $catid = $id;
        $data['detail'] =$this->CategoryModel->getByIdSub($catid);
        // var_dump($detail);
        $data['select_cat'] =explode(",",$data['detail']->main_category);
        $data['mainCat'] = $this->CategoryModel->getCategory();
        //var_dump($a);
       // $this->load->view('subcategory/editSubCatView',$data);
       $this->load->view('Dashboard/subcategory/editSubCategory',array_merge($data,$this->data));
    }


    public function updateSubCategory()
    {
        $cat = array();

        $cat['id']              = $this->input->post('id');
        $cat['sub_cat_name']    = $this->input->post('subCatName');
        $cat['sub_cat_id']      = $this->input->post('sub_cat_id');
        $cat['description']     = $this->input->post('description');
        $cat['main_category']   = implode(',',$this->input->post('main_category'));
        $cat['added_date']      = $this->input->post('added_date');
        $cat['edited_date']     = $this->input->post('edited_date');
        //$cat['status']          = $this->input->post('status');
        // var_dump($cat);

        $update = $this->CategoryModel->subUpdating($cat);
        redirect('MainCategoryController/viewSubCategory',$cat);

    }

    public function deleteSubCategory($id)
    {
        $catid = $id;
        // echo $catid;
        $detail = $this->CategoryModel->getByIdSub($catid);
        // var_dump($detail);
        $del = $this->CategoryModel->deleteSubCategory($catid);

        redirect('MainCategoryController/viewSubCategory');

    }

    public function searchSubCat()
    {
      
        $word = $this->input->post('word');
        //echo($word);
        $this->data['items'] = $this->CategoryModel->getByWord($word);
        //var_dump($this->data['items']);

        //$this->load->view('Dashboard/subcategory/searchDetail',$this->data);
    }


}
?>