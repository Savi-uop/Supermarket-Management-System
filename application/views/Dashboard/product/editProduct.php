<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('Dashboard/tpl/header')  ?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('Dashboard/tpl/nav')  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('Dashboard/tpl/aside')  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">SK Super Market DashBord</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        

        
        
        
        
        
        
        

        <!-- Main row -->
        

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              
              <!-- /.card-header -->
              
              <body>
                <div class="container">
                    <form action="<?php echo $base_url; ?>ProductController/updateProduct/" method="POST" enctype="multipart/form-data">
                  
                        <div class="col-12">
                            <h2 class="text-center">Product Editing form</h2>
                        </div>
                       
                        <div class="col-12">
                            <input type="hidden" name="id" id="id"  value ="<?php echo $detail->id; ?>">
                         </div>
            
                        <div class="col-12">
                            <label > Product Name :</label>
                            <span style="color:red;">*</span>
                            <input type="text" name="pro_name" id="pro_name"  class="form-control" value ="<?php echo $detail->pro_name; ?>" required>
                            
                        </div>
            
                        <div class="col-12">
                            <!-- <label> Product ID :</label> -->
                            <input type="hidden" name="pro_id" id="pro_id" class="form-control" value ="<?php echo $detail->pro_id; ?>">
                        </div>
            
                        <div class="col-12">
                            <label> Retail Price : </label>
                            <span style="color:red;">*</span>
                            <input type="text" name="retail_price" id="retail_price" class="form-control" value ="<?php echo $detail->retail_price; ?>" required>
                        </div>
            
                        <div class="col-12">
                            <label> Selling Price :</label>
                            <span style="color:red;">*</span>
                            <input type="text" name="selling_price" id="selling_price" class="form-control" value ="<?php echo $detail->selling_price; ?>" required>
                        </div>
            
                        <div class="col-12">
                            <label> Description :</label>
                            <input type="text" name="description" id="description" class="form-control" value ="<?php echo $detail->description; ?>">
                        </div>
            
            
                        <div class="row col-12">
                            <div class="col-4">
                                <label> Quantity : (current quantity : <?php echo $detail->quantity; ?>)</label>
                                <span style="color:red;">*</span>
                                <input type="text" name="quantity" id="quantity" class="form-control" value="0" required>
                                <input type="hidden" name="curr_quantity" id="curr_quantity" value="<?php echo $detail->quantity; ?>">
                            </div>

                            <div class="col-1 form-check">
                              <label>Plus</label><br>
                              <input type="radio" value="plus" name="q" id="q"  checked>
                              
                            </div>
            
                            <div class="col-1 form-check">
                              <label> Minus</label><br>
                              <input type="radio" value="minus" name="q" id="q">
                            </div>

                            <div class="col-6">
                                <label for="unit">Unit:</label> <br>
                                <select name="unit" id="unit" class="form-control btn-secondary" required>    
                                    <?php  
                                        
                                            foreach ($units as $key=>$value):  ?>
                                                <?php if( $key == $detail->unit ){ ?>
                                                    <option value="<?php echo $key; ?>" selected> <?php  echo $value; ?></option>
                                        <?php }else{ ?>
            
                                            <option value="<?php echo $key; ?>" > <?php  echo $value; ?></option>
                                        
                                        <?php } ?>
                                                    
                                            <?php  endforeach; ?>
                                </select>  
                                
                            </div>
            
                        </div>
            
                        <br>
                        
                        <div class="row col-12">   

                          <div class="col-6 dropdown-content">
                              <label> Re-order level :</label>
                              <select name="level" id="level" class="form-control">
              
                                  <?php 
                                      
                                      foreach ($levels as $key => $value) : ?>
              
                                      <?php if(  $value == $detail->level ){ ?>
                                        <!-- echo $level;  -->
                                              <option value="<?php echo $value; ?>" selected><?php echo $value; ?></option>
                                          
                                      <?php }else{ ?>
                                              <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                      <?php }?>
                                  <?php endforeach; ?>
                              </select>

                            </div> 

                            <div class="col-6">
                              <label> Related sub-category :</label>
                              <span style="color:red;">*</span>
            
                              <div class="input-group dropdown-content">
                                <select name="sub_category" id="sub_category" class="form-control">
                          
                                          <?php foreach ($sub_category as $subcategories ): ?>
                                              <?php if($subcategories['id'] == $detail->sub_category){  ?>
                                                  <option value="<?php echo $subcategories['id']; ?>" name="sub_category[]" selected><?php echo $key['sub_cat_name']; ?> <?php echo $subcategories['sub_cat_name']; ?> </option>
                                                    
                                                  <?php }else{ ?>
                                                      <option value="<?php echo $subcategories['id']; ?>" name="sub_category[]"><?php echo $subcategories['sub_cat_name']; ?> </option>
                                                    
                                                  <?php } ?>

                                          <?php endforeach; ?>   
                                  </select>          
                                            
                              </div>

                            </div>
                           
                        </div>
                        
                        <div class="row col-12">

                          <div class="col-6 dropdown-content">
                              <label> Agents :</label>
                              <span style="color:red;">*</span>
                              <select name="agent" id="agent" class="form-control">
                                  <?php foreach ($agent as $agents ): ?>
                                              <?php if($agents['id'] == $detail->agent_id){  ?>
                                                  <option value="<?php echo $agents['id']; ?>" name="agent[]" selected><?php echo $agents['agent_name']; ?> </option>
                                                    
                                                  <?php }else{ ?>
                                                      <option value="<?php echo $agents['id']; ?>" name="agent[]"><?php echo $agents['agent_name']; ?> </option>
                                                    
                                                  <?php } ?>

                                          <?php endforeach; ?>
                                  
                              </select>
                            
                          </div>

                        </div>
            
                        

            
                        <div class="col-12">
                            <!-- <label > Added Date :</label> -->
                            <input type="hidden" name="added_date" id="added_date" class="form-control" value="<?php echo(date("Y-m-d h:i:sa")); ?>" >
                        </div>
            
                        <div class="col-12">
                            <!-- <label > Edited Date :</label> -->
                            <input type="hidden" name="edited_date" id="edited_date" class="form-control" value="<?php echo(date("Y-m-d h:i:sa")); ?>">
                        </div>
            
                        <div class="col-12">
                            <!-- <label for="status"> Status :</label> -->
                            <input type="hidden" name="status" id="status" class="form-control" value="">
                        </div>
            
                        <div class="col-12">
                            <label> Image of product :</label><br>
                            <input type='file' name='image' id='image' size='20' />
                            <img src="<?php echo $base_url; ?>upload/<?php echo $detail->image; ?>" >
            
                        <br><br>
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary" value="Save">
                        </div>
                        <br><br>
            
                    </form>
                </div>
            </body>
              
              
              <!-- /.card-body -->
              
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php $this->load->view('Dashboard/tpl/footer')  ?>
</div>
<!-- ./wrapper -->

<?php $this->load->view('Dashboard/tpl/script')  ?>
</body>
</html>
