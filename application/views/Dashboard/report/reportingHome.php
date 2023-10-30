<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SK Family Shop</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="http://localhost/Supermarket1/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="http://localhost/Supermarket1/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/Supermarket1/dist/css/adminlte.min.css">

  <!-- bootstrap -->
  <link rel="stylesheet" href="http://localhost/Supermarket1/bootstrap/css/bootstrap.min.css">

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
            <h1 class="m-0"> <b>S.K. FAMILY SHOP</b> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">Home</a></li>
              <li class="breadcrumb-item active">Reports</li>
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
        
            <div class="container">
                <div class="card direct-chat bg-dark"><h4 align="center"> Report Module</h4></div>
            </div>
        
            <!-- <div class="container">
                <div class="row">
                    <div class="col-6 align-items-start">
                        
                        
                        <br><br>
                            <div class="row"><button type="button" class="btn btn-secondary btn-lg"><a href="SalesReports/">Sales Reports</a></button> </div> <br><br>
                            <div class="row"><button type="button" class="btn btn-dark btn-lg"> <a href="ProductsReport/">Product Reports</a> </button></div> <br><br>
                            <div class="row"> <button type="button" class="btn btn-success btn-lg"> Income Reports</button> </div> <br><br>
                            <div class="row"> <button type="button" class="btn btn-success btn-lg"> Profit Reports </button> </div> <br><br>
                            <div class="row"> <button type="button" class="btn btn-success btn-lg"> User Login Reports </button> </div> <br><br> 
                        
                    </div>

                    <div class="col-6 align-items-start">
                        <img src="http://localhost/Supermarket1/dist/img/graph.png" alt="" width="860">
                        <!-- <img src="http://localhost/Supermarket1/dist/img/g1.jpg" alt=""> -->
                    <!-- </div>
                  </div>
                </div>
            </div> --> 

                    <!-- start new set of buttons -->
                    <div class="container">
                        <div class="row">

                            <div class="col-4">
                              <!-- small box -->
                              <div class="small-box bg-success">
                                <div class="inner">
                                  <h4>Sales Reports</h4>

                                  <p>Daily/Weekly/Monthly</p>
                                  <br>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-bag"></i>
                                </div>
                                <a href="http://localhost/Supermarket1/ReportController/SalesReports/" class="small-box-footer">CREATE <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>

                            <!-- ./col -->
                            <div class="col-4">
                              <!-- small box -->
                              <div class="small-box bg-danger">
                                <div class="inner">
                                  <h4>Product Reports</h4>

                                  <p>Stock out products</p>
                                  <br>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="http://localhost/Supermarket1/ReportController/ProductsReport/" class="small-box-footer">CREATE <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            
                            <!--
                            //col
                            <div class="col-3">
                              //small box 
                              <div class="small-box bg-warning">
                                <div class="inner">
                                  <h4>Profit Reports</h4>

                                  <p>profit range</p>
                                  <br>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">CREATE <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                              //end col
                            -->

                            <div class="col-4">
                              <!-- small box -->
                              <div class="small-box bg-info">
                                <div class="inner">
                                  <h4>Income Reports</h4>

                                  <p>Monthly/Annual</p>
                                  <br>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="http://localhost/Supermarket1/ReportController/IncomeReports/" class="small-box-footer">CREATE <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                          <!-- ./col -->
                        </div>
                      </div>
                    <!-- end of set of buttons -->

                    
                

        
        
             <!-- /.col -->
          </div>
     
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
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="#">skfamilyshop.com</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.02
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="http://localhost/Supermarket1/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="http://localhost/Supermarket1/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://localhost/Supermarket1/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/Supermarket1/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="http://localhost/Supermarket1/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="http://localhost/Supermarket1/plugins/raphael/raphael.min.js"></script>
<script src="http://localhost/Supermarket1/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="http://localhost/Supermarket1/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="http://localhost/Supermarket1/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="http://localhost/Supermarket1/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/Supermarket1/dist/js/pages/dashboard2.js"></script>
</body>
</html>
