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

  <!-- client.js  -->
  <script src="http://localhost/Supermarket1/dist/js/client.js"> </script>

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
          <img src="dist/img/admin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Arunoda Jayasundara</a>
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
            <h1 class="m-0">SK Super Market Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/supermarket1/">Payments</a></li>
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
        

        
        
        <!-- main content -->

        <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }

    
  </style>




<div class="container-fluid">
  <div class="row content">

    <div class="col-sm-5 sidenav">
      <span><h2>Home</h2></span><br>
      <span><h4>Invoice</h4></span>
      
      <div class="input-group">
        <table class="table">
          <th>#</th>
          <th>Item</th>
          <th>price</th>
          <th>Qty</th>
          <th>Amount</th>

          <tr>
              <td>1</td>
              <td>Sunlight</td>
              <td>55.00</td>
              <td><input type="number"></td>
              <td>220.00</td>
          </tr>

          <tr>
              <td>2</td>
              <td>Maggi</td>
              <td>65.00</td>
              <td><input type="number"></td>
              <td>130.00</td>
          </tr>
          
          <tr>
              <td>3</td>
              <td>Highland ice cream 1L</td>
              <td>355.00</td>
              <td><input type="number"></td>
              <td>355.00</td>
          </tr>

          <tr>
              <td>4</td>
              <td>Samba rice 5kg</td>
              <td>720.00</td>
              <td><input type="number"></td>
              <td>720.00</td>
          </tr>
          
        

        </table>
        <div class="container row">
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
         <!-- / <div class="col"></div> -->
          <div class="col"><label><strong>Total amount </strong></label></div>
          <div class="col pull-right"><label><strong>  Rs.1425.00</strong></label></div>
        </div>

      </div>
    </div>

    <div class="col-sm-2"><br>

      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search product..">
        <span class="input-group-btn">
          <!-- <button class="btn btn-default" type="button"> -->
            <span class="glyphicon glyphicon-search"></span>
          <!-- </button> -->
        </span>
      </div>
      <br>
      <div class form-control> 
        <button class="btn bg-primary">Search</button>
      </div>
    </div>

    <div class="col-sm-5">
      <!-- <?php var_dump($cat1); ?> -->
        <div class="row">
            <div class="col btn jumbotron bg-info">
            <h3><a href="HomeController/getSubCatId/6"><button type="button" class="btn btn-lg btn-info" name="baby" id="6">BABY NEEDS</button></a></h3>
            </div>
            <div class="col btn jumbotron bg-warning">
            <h3><a href="HomeController/getSubCatId/13"><button type="button" class="btn btn-lg btn-warning" name="grocery" id="13">GROCERY</button></a></h3>
            </div>
            <div class="col btn jumbotron bg-success">
               <h3><a href="HomeController/getSubCatId/12"><button type="button" class="btn btn-lg btn-success" name="dairy" id="12">DAIRY PRODUCTS</button></a></h3>
            </div>
        </div>
      
        <div class="row">
            <div class="col btn jumbotron bg-success">
               <h3><a href="HomeController/getSubCatId/9"><button type="button" class="btn btn-lg btn-success" name="fruit" id="9">FRUITS & VEGETABLES</button></a></h3>
            </div>
            <div class="col btn jumbotron bg-danger">
            <h3><a href="HomeController/getSubCatId/5"><button type="button" class="btn btn-lg btn-danger" name="beverages" id="5">BEVERAGES</button></a></h3>
            </div>
            <div class="col btn jumbotron bg-warning">
            <h3><a href="HomeController/getSubCatId/7"><button type="button" class="btn btn-lg btn-warning" name="snak" id="7">SNAKS & BISCUITS</button></a></h3>
            </div>
        </div>

        <div class="row">
          <div class="col btn jumbotron bg-danger">
            <h3><a href="HomeController/getSubCatId/10"><button type="button" class="btn btn-lg btn-danger" name="fish" id="10">FISH & MEAT</button></a></h3>
          </div>
          <div class="col btn jumbotron bg-primary">
            <h3><a href="HomeController/getSubCatId/16"><button type="button" class="btn btn-lg btn-primary" name="spread" id="16">SPREADS & JAM</button></a></h3>
          </div>
          <div class="col btn jumbotron bg-success">
            <h3><a href="HomeController/getSubCatId/15"><button type="button" class="btn btn-lg btn-success" name="stationary" id="15">STATIONARY</button></a></h3>
          </div>
        </div>

        <div class="row">
            <div class="col btn jumbotron bg-info">
            <h3><a href="HomeController/getSubCatId/8"><button type="button" class="btn btn-lg btn-info" name="personal" id="8">PERSONAL CARE</button></a></h3>
            </div>
            <div class="col btn jumbotron bg-warning">
            <h3><a href="HomeController/getSubCatId/11"><button type="button" class="btn btn-lg btn-warning" name="household" id="11">HOUSEHOLDINGS</button></a></h3>
            </div>
            <div class="col btn jumbotron bg-secondary">
            <h3><a href="HomeController/getSubCatId/17"><button type="button" class="btn btn-lg btn-secondary" name="electric" id="17">ELECTRIC</button></a></h3></h3>
            </div>
        </div>
      
      
    </div>
  </div>
</div>

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

<!-- load the moodle -->


<div class="container">
  
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<span class="pointer client-row" data-id="12">
            <button class="btn btn-success btn-sm" id="client-user" value="12"><span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span> Details</button>
 </span>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="edit-client-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <table border="1" class="table table-hover">
      <h3 class="text-center">Products List</h3>
      <tr>
          <th>ID</th>
          <th>Product.Name</th>
          <th>Product.ID</th>
          <th>Retail Price</th>
          <th>Selling Price</th>
          <th>Description</th>
          <th>Quantity</th>
          <th>Unit</th>
          
      </tr>

      <tr>
        <td>1</td>
        <td>carrot</td>
        <td>12</td>
        <td>34.00</td>
        <td>67.00</td>
        <td>Fresh</td>
        <td>500g</td>
        <td>Kg</td>
      </tr>

      <tr>
        <td>2</td>
        <td>Biscuit</td>
        <td>67</td>
        <td>200.00</td>
        <td>367.00</td>
        <td>MAliban</td>
        <td>1</td>
        <td>-</td>
      </tr>

      <tr>
        <td>3</td>
        <td>Orange</td>
        <td>30</td>
        <td>30.00</td>
        <td>50.00</td>
        <td>Tin tin</td>
        <td>5</td>
        <td>-</td>
      </tr>      
      
  </table>

    </div>
  </div>
</div>
  
</div>

<!-- End of the moodle -->