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
              <li class="breadcrumb-item active"><a href="http://localhost/Supermarket1/ReportController/">Reports</a></li>
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
                <h2> <span class="badge bg-secondary col-12">Sales Reports</span></h1>
            </div>
        
                  <div class="container">
                
                        <form action="http://localhost/Supermarket1/ReportController/ReportHandling/" method="POST">
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
                                            <button class="btn btn-success btn-lg" id="daily" value ="daily" name ="report" type="submit">Daily Report</button>
                                          </div>
                                      </div>
                                </div>
                            </div>  
                          </form>  

                        <form action="http://localhost/Supermarket1/ReportController/ReportHandling/" method="POST">
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
                                              <button class="btn btn-success btn-lg" id ="weekly" value="weekly" name ="report" type="submit">Weekly Report</button>
                                          </div>
                                      </div>
                                </div>
                            </div>
                        </form>

                        <form action="http://localhost/Supermarket1/ReportController/ReportHandling/" method="POST">              
                            <br><br>
                          <div class="card">
                              <div class="card-body">
                                      <div class="row">
                                          <div class="col">
                                              <label for="">Select the month</label>
                                              <select id="month" name="month" value="month" class="form-control">
                                                  <option value="1">January</option>
                                                  <option value="2">February</option>
                                                  <option value="3">March</option>
                                                  <option value="4">April</option>
                                                  <option value="5">May</option>
                                                  <option value="6">June</option>
                                                  <option value="7">July</option>
                                                  <option value="8">August</option>
                                                  <option value="9">September</option>
                                                  <option value="10">October</option>
                                                  <option value="11">November</option>
                                                  <option value="12">December</option>
                                              </select>
                                          </div>

                                          <div class="col">
                                              <br>
                                              <button class="btn btn-success btn-lg" id="monthly" value="monthly" name="report" type="submit">Monthly Report</button>
                                          </div>
                                                
                                      </div>
                                </div>
                            </div>
                        </form>
                                
                                    

                        <form action="http://localhost/Supermarket1/ReportController/ReportHandling/" method="POST">
                          <div class="card">
                              <div class="card-body">
                                      <div class="row">
                                          <div class="col">
                                              <label for="">Select the year</label>
                                              <select id="year" name="year" value="year" class="form-control">
                                                  <option value="2021">2021</option>
                                                  <option value="2020">2020</option>
                                                  <option value="2019">2019</option>
                                                  <option value="2018">2018</option>
                                                  
                                              </select>
                                          </div>

                                          <div class="col">
                                              <br>
                                              <button class="btn btn-success btn-lg" id="anualy" value="anualy" name="report" type="submit">Anual Report</button>
                                          </div>
                                                
                                      </div>
                                  </div>
                            </div> 
                        </form>  
                                             
                                            
                                            
                                            
                                        
                    <!-- </div> -->
                    
                                    
                  </div> 
            </div>
                    
                        
  
    </section>

             
        
</div>
             <!-- /.col -->

     
   
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
