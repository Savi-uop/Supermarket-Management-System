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
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/supermarket1/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/sk.png" alt="SK Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Staff
                <span class="right badge badge-danger">Home</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/supermarket1/MainCategoryController/viewCategory" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Main Category
                <span class="right badge badge-info">10</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/Supermarket1/MainCategoryController/viewSubCategory" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sub Category
                <span class="right badge badge-danger">20</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/Supermarket1/ProductController/viewProduct" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Products
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Reports
                <span class="right badge badge-danger">21</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
        <a href="http://localhost/supermarket1/AgentController/viewAgent" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Agents
                <span class="right badge badge-danger">32</span>
              </p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

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

                            <div class="col-3">
                              <!-- small box -->
                              <div class="small-box bg-info">
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
                            <div class="col-3">
                              <!-- small box -->
                              <div class="small-box bg-success">
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
                            <!-- ./col -->
                            <div class="col-3">
                              <!-- small box -->
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
                            <!-- ./col -->

                            <div class="col-3">
                              <!-- small box -->
                              <div class="small-box bg-danger">
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
