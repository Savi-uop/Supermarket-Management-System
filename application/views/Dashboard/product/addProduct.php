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
                  
                    <form action="http://localhost/Supermarket1/ProductController/addProduct/" method="POST" enctype="multipart/form-data" >
                  
                        <div class="col-12">
                            <h2 class="text-center">Product inserting form</h2>
                        </div>
                        
                        <div class="col-12">
                            <label > Product Name :</label>
                            <span style="color:red;">*</span>
                            <input type="text" name="pro_name" id="pro_name" placeholder="Enter the product" class="form-control" required /> 
                            
                         </div>
            
                        <div class="col-12">
                            <!-- <label> Product ID :</label> -->
                            <input type="hidden" name="pro_id" id="pro_id" placeholder="Enter the product ID" class="form-control">
                        </div>
            
                        <div class="col-12">
                            <label> Retail Price :</label>
                            <span style="color:red;">*</span>
                            <input type="number" name="retail_price" id="retail_price" placeholder="enter retail price" class="form-control" required min="0" data-bind="value:retail_price" />
                        </div>
            
                        <div class="col-12">
                            <label> Selling Price :</label>
                            <span style="color:red;">*</span>
                            <input type="number" name="selling_price" id="selling_price" placeholder="enter selling price" class="form-control" min="0" data-bind="value:selling_price" required />
                        </div>
            
                        <div class="col-12">
                            <label> Description :</label>
                            <input type="text" name="description" id="description" placeholder="category description" class="form-control">
                        </div>
            
            
                        <div class="row col-12">
                            <div class="col-6">
                                <label> Quantity :</label>
                                <span style="color:red;">*</span>
                                <input type="number" name="quantity" id="quantity" placeholder="enter the quantity" class="form-control" min="1" required>
                            </div>
            
                            <div class="col-6">
                                <label for="unit">Unit:</label> <br>
                                <select name="u" id="u" class="form-control">
                                    <option value="">--------</option>
                                    <option value="g">gram(g)</option>
                                    <option value="kg">kilo-gram(Kg)</option>
                                    <option value="ml">mili-litter(ml)</option>
                                    <option value="L">litter(L)</option>
                                </select>
                            </div>
            
                        </div>
                        <div class="row col-12">

                          <div class="col-6 dropdown-content">
                              <label> Re-order level :</label>
                              <select name="level" id="level" class="form-control">
                                  <option value="15">15</option>
                                  <option value="25">25</option>
                                  <option value="40">40</option>
                                  <option value="50">50</option>
                                  <option value="50">75</option>
                                  <option value="50">100</option>
                                  <option value="50">130</option>
                              </select>
                            
                          </div>

                          <div class="col-6">
                            <label> Related sub-category :</label>
                            <span style="color:red;">*</span>

                            <div class="input-group dropdown-content">
                              <select name="sub_category" id="sub_category" class="form-control" required>
                                <option value="">Select sub-category</option>
                                <?php foreach ($cat1 as $key ): ?>
                                  <option value="<?php echo $key['id']; ?>"><?php echo $key['sub_cat_name']; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                                  
                          </div>


                        </div>
                        <div class="row col-12">

                          <div class="col-6 dropdown-content">
                              <label> Agents :</label>
                              <span style="color:red;">*</span>
                              <select name="agent" id="agent" class="form-control" required>
                                  <option value="">Select Agent</option>
                                  <?php foreach ($agent as $agents ): ?>
                                  <option value="<?php echo $agents['id']; ?>"><?php echo $agents['agent_name']; ?></option>
                                <?php endforeach; ?>
                              </select>
                            
                          </div>

                        </div>
                        <br>
            
                        
            
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
            
                        <div class="col-4">
                            <label> Image of product :</label>
                            <span style="color:red;">*</span>
                            <br>
                            <input type='file' name='image' id='image' size='20' />
            
                        <br><br>
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary" value="Add">
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
