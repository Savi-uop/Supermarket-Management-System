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
              <li class="breadcrumb-item"><a href="http://localhost/supermarket1/">Home</a></li>
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
        
            <div class="d-grid gap-3">
                <h2> <span class="badge bg-secondary col-12">Income Reports</span></h1>
            </div>
        
            <div class="container">
                <div class="row">
                    <div class="col-9 align-items-start">
                        
                        
                          <form action="http://localhost/Supermarket1/index.php/ReportController/IncomeReportHandling/" method="POST">
                            <br><br>
                        
                            <div class="card">
                                <div class="card-body">
                                    
                                      <div class="row">
                                          <div class="col">
                                            <label for="">Select the date</label>
                                            <input type="date" class="form-control" id="date" name="date" value="date"  REQUIRED>
                                          </div>
                                          <div  class="col">
                                            <br>
                                            <div class="col"><button class="btn btn-success btn-lg" id="daily" value ="daily" name ="report" type="submit">Daily Income</button></div>
                                          </div>
                                      </div>
                                </div>
                            </div>  
                        </form>  

                                     
                        <form action="http://localhost/Supermarket1/index.php/ReportController/IncomeReportHandling/" method="POST">
                            <br><br>
                            <div class="card">
                                <div class="card-body">
                                      <div class="row">
                                          <div class="col">
                                            <label for="">Select the date1</label>
                                            <input type="date" class="form-control" id="date1" name="date1" value="date1" REQUIRED>
                                          </div>

                                          <div class="col">
                                              <label for="">Select the date2</label>
                                              <input type="date" class="form-control" id="date2" name="date2" value="date2"  REQUIRED>
                                          </div>
                                          
                                          <div class="col">
                                              <br>
                                              <button class="btn btn-success btn-lg" id ="range" value="range" name ="report" type="submit">Income Report</button></div>
                                          </div>
                                      </div>
                                </div>
                            </div>
                        </form>           
                                
                       
                        
                    </div>

                    
                </div>
            </div>

        
        </div>
             <!-- /.col -->

     
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
