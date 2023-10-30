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
              <li class="breadcrumb-item"><a href="http://localhost/supermarket1/">Home</a></li>
              <li class="breadcrumb-item active">Agent</li>
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
                 <!-- <span class="badge bg-dark"><h3 class="card-title">Admin Dashboard</h3></span>  -->

              </div>

              <!-- /.card-header -->
              <div class="card-body p-0">
                    <div class="container">
                    
                        <div class="row">                  

                            <div class="col-4">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h4 class="text-center">Add Agent</h4>
                                        <br><br><br>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="http://localhost/Supermarket1/AgentController/" class="small-box-footer">GO <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>

                            <div class="col-4">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h4 class="text-center">Add Sub-Category</h4>
                                        <br><br><br>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="http://localhost/Supermarket1/MainCategoryController/loadSubCategoryForm" class="small-box-footer">GO <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>

                            <div class="col-4">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h4 class="text-center">Add Product</h4>
                                        <br><br><br>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="http://localhost/Supermarket1/ProductController/" class="small-box-footer">GO <i class="fas fa-arrow-circle-right"></i></a>
                                    
                              </div>
                            </div>

                        </div>

                        <!-- 2nd row -->
                        <div class="row">                  

                            <div class="col-4">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h4 class="text-center">Add User</h4>
                                        <br><br><br>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="http://localhost/Supermarket1/auth/create_user" class="small-box-footer">GO <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>

                            <div class="col-4">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h4 class="text-center">Reports</h4>
                                        <br><br><br>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="http://localhost/Supermarket1/ReportController/" class="small-box-footer">GO <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>

                            

                        </div>
                        
                    
                    </div>
                    <!-- /.table-responsive -->
                </div>
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
