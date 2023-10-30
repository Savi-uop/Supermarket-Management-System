<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SK Family Shop</title>
  
     <link rel="stylesheet" href="<?php echo $base_url; ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>bootstrap/css/custom.css">
    <!-- jQuery -->
    <!-- <script src="/Supermarket1/dist/js/jquery.min.js"></script> -->
    <script src="<?php echo $base_url; ?>dist/js/jquery.js"></script>
    <!-- client.js  -->
    <script src="<?php echo $base_url; ?>bootstrap/js/bootstrap.min.js"> </script>
    
    <script src="<?php echo $base_url; ?>dist/js/product_view.js"> </script>
   

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>dist/css/adminlte.min.css">
  
</head>
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
            <h1 class="m-0">Product List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">Home</a></li>
              <li class="breadcrumb-item active">product</li>
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
              <div class="card-header border-transparent">
                <span class="badge rounded-pill bg-dark"><h3 class="card-title">Product List</h3></span>

                <div class="card-tools">
                    <a href="<?php echo $base_url; ?>ProductController/" class="btn btn-sm btn-info float-right">Add Product</a>
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  
                  <table border="1" class="table table-striped table-hover">
                    <thead class="table-dark">
                    <tr>
                        
                        <th>Product.Name</th>
                        <!-- <th>Description</th> -->
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    <?php foreach($product1 as $row): ?>
                        <tr>
                            
                            <td><?php echo $row['pro_name']; ?></td>
                            <!-- <td><?php //echo $row['description']; ?></td> -->
                            <td><?php echo $row['quantity']; ?></td>
                            <td> <img src="<?php echo $base_url; ?>upload/<?php echo $row['image']; ?>" width="150"></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="editProduct/<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-success" name="edit" >Edit</button></a>
                                    &nbsp;
                                        <span class="pointer productDeleteRow" proId="<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-danger" name="delete"data-toggle="modal" >Delete</button></span>&nbsp;
                                    
                                        <span class="pointer productViewRow" pro-id="<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-primary" name="details" data-toggle="modal">Details </button></span>
                                       
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                  
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              
              <!-- ///Delete models area -->
              <div class="modal fade" id="productDeleteModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>Delete Blog </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form method="post" action="http://localhost/Supermarket1/ProductController/deleteProduct">
                  <div class="modal-body">
                    
                    <table class="table table-sm">
                    
                        <tr class="">
                            <td> <span class="text-red text-center"><b>Are you Sure Delete This Product!!</b> </span> </td>
                            <input type="hidden" name="pro_id" id="pro_id" value="" />
                        </tr>
                    </table>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    
                  </div>
                  </form>
                </div>
              </div>
            </div>
        <!-- end delete modal area -->
              
              
              
              
          <!-- /// models area -->
              <div class="modal fade" id="productViewModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><b>PRODUCT DETAILS </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                    <table class="table table-sm">
                    
                        <tr class=""><td><b>ID</b></td><td>:</td><td> <input type="text" readonly class="form-control-plaintext" id="p_id" value=""> </td></tr>
                        <tr><td><b>Product.Name</b></td><td>:</td><td> <input type="text" class="form-control-plaintext" id="p_name" name="p_name" value="" readonly> </td></tr>
                        <tr><td><b>Product.ID</b></td><td>:</td><td><input type="text" class="form-control-plaintext" id="p_code" name="p_code" value="" readonly></td></tr>
                        <tr><td><b>Retail Price</b></td><td>:</td><td><input type="text" class="form-control-plaintext" id="r_price" name="r_price" value="" readonly></td></tr>
                        <tr><td><b>Selling Price</b></td><td>:</td><td><input type="text" class="form-control-plaintext" id="s_price" name="s_price" value="" readonly></td></tr>
                        <tr><td><b>Description</b></td><td>:</td><td><input type="text" class="form-control-plaintext" id="description" name="description" value="" readonly></td></tr>
                        <tr><td><b>Quantity</b></td><td>:</td><td><input type="text" class="form-control-plaintext" id="quantity" name="quantity" value="" readonly></td></tr>
                        <tr><td><b>Unit</b></td><td>:</td><td><input type="text" class="form-control-plaintext" id="unit" name="unit" value="" readonly></td></tr>
                        <tr><td><b>Re-Order level</b></td><td>:</td><td><input type="text" class="form-control-plaintext" id="r_order" name="r_order" value="" readonly></td></tr>
                        <tr><td><b>Related Sub Category</b></td><td>:</td><td><input type="text" class="form-control-plaintext" id="sub_cat" name="sub_cat" value="" readonly></td></tr>
                        <tr><td><b>Agent ID</b></td><td>:</td><td><input type="text" class="form-control-plaintext" id="agent" name="agent" value="" readonly></td></tr>
                        <tr><td><b>Added date</b></td><td>:</td><td><input type="text" class="form-control-plaintext" id="add_date" name="add_date" value="" readonly></td></tr>
                        <tr><td><b>Edited date</b></td><td>:</td><td><input type="text" class="form-control-plaintext" id="end_date" name="end_date" value="" readonly></td></tr>
                        <tr><td><b>Status</b></td><td>:</td><td><input type="text" class="form-control-plaintext" id="status" name="status" value="" readonly></td></tr>
                        <tr><td><b>Image</b></td><td>:</td><td> <img id="product_image" src="http://localhost/Supermarket1/upload/no_image.jpg" ></td></tr>
                        
                   
               
                </table>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                  </div>
                </div>
              </div>
            </div>
        <!-- end modal area -->
              
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
