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
  <!-- Bootstrap -->
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
            <h1 class="m-0">SK FAMILY SHOP Dashboard</h1>
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
                

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->





              <!-- MAin content Begin here -->

              <div class="container">
                        
                        <form action="http://localhost/Supermarket1/index.php/UserController/updateUser/" method="POST" enctype="multipart/form-data">
                            <br>
                
                            <div class="card">
                
                                <div class="card-header">
                                    <h2 class="text-center">User Editing form</h2>
                                </div>
                            
                                <div class="card-body">
                                    
                                    <div class="col-12">
                                        <input type="hidden" name="id" id="id"  value ="<?php echo $detail->id; ?>">
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <label > First Name :</label>
                                                <input type="text" name="fname" id="fname" class="form-control" value ="<?php echo $detail->fname; ?>">  
                                            </div>
                                            <div class="col-6">
                                                <label > Last Name :</label>
                                                <input type="text" name="lname" id="lname" class="form-control" value ="<?php echo $detail->lname; ?>">  
                                            </div>
                                        </div>    
                                    </div>
                
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <label>Date of Birth</label>
                                                <input type="date" name="dob" id="dob" class="form-control" value ="<?php echo $detail->dob; ?>">  
                                            </div>
                                            <div class="col-6">
                                                <label>Contact Number</label>
                                                <input type="text" name="contact" id="contact" class="form-control" max-lenth="10" value ="<?php echo $detail->contact; ?>">  
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <label> NIC No.</label>
                                                <input type="text" name="nic" id="nic" class="form-control" value ="<?php echo $detail->nic; ?>">  
                                            </div>
                                            <div class="col-6">
                                                <label>User Id</label>
                                                <input type="text" name="user_id" id="user_id" class="form-control" value ="<?php echo $detail->user_id; ?>">  
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col">
                                                <label>Address line1</label>
                                                <input type="text" name="address1" id="address1" class="form-control" value ="<?php echo $detail->address1; ?>">
                                            </div>
                                            <div class="col">
                                                <label>Address line2</label>
                                                <input type="text" name="address2" id="address2" class="form-control" value ="<?php echo $detail->address2; ?>">
                                            </div>
                                            <div class="col">
                                                <label>Address line3</label>
                                                <input type="text" name="address3" id="address3" class="form-control" value ="<?php echo $detail->address3; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col">
                                                <label>Email Address</label>
                                                <input type="email" name="email" id="email"class="form-control" value ="<?php echo $detail->email; ?>">
                                            </div>

                                            <div class="col">
                                                <label>Please select your designation</label>
                                                <div class="dropdown show">
                                                    <select name="role" id="role">
                                                        <?php  
                                                
                                                            foreach ($roles as $key=>$value):  ?>
                                                                <?php if( $value == $detail->role){ ?>
                                                                    <option value="<?php echo $key; ?>" selected> <?php  echo $value; ?></option>
                                                        <?php }else{ ?>
                            
                                                            <option value="<?php echo $key; ?>" > <?php  echo $value; ?></option>
                                                        
                                                        <?php } ?>
                                                                    
                                                        <?php  endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-8">
                                                <label>Gender</label>
                                                <div class="row">
                                                <?php
                                                if($detail->gender == 'male')
                                                {
                                                    ?>
                                                    <div class="form-group col-6">
                                                        <label for="male">Male</label>
                                                        <input type="radio" name="gender" id="male" value="<?php  echo $detail->gender; ?>" checked>
                                                    </div>

                                                    <div class="form-group col-6">
                                                        <label for="female">Female </label>
                                                        <input type="radio" name="gender" id="female" value="female">
                                                    </div>
                                                    <?php
                                                }
                                                
                                                else if($detail->gender == 'female')
                                                { 
                                                    ?>
                                                    <div class="form-group col-6">
                                                        <label for="male">Male</label>
                                                        <input type="radio" name="gender" id="male" value="male" >
                                                    </div>

                                                    <div class="form-group col-6">
                                                        <label for="female">Female </label>
                                                        <input type="radio" name="gender" id="female" value="<?php  echo $detail->gender; ?>" checked>
                                                    </div>
                                                    <?php
                                                }
                                                else
                                                { ?>
                                                    <div class="form-group col-6">
                                                        <label for="male">Male</label>
                                                        <input type="radio" name="gender" id="male" value="male" >
                                                    </div>

                                                    <div class="form-group col-6">
                                                        <label for="female">Female </label>
                                                        <input type="radio" name="gender" id="female" value="female">
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                            <label>Upload your photo</label>
                                            <input type="file" name='image' id='image' size='18' />
                                            <img src="http://localhost/Supermarket1/upload/<?php echo $detail->image; ?>" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label> Description :</label>
                                        <input type="text" name="description" id="description" class="form-control" value ="<?php echo $detail->description; ?>">
                                    </div>
                
                                    <div class="col-12">
                                        <input type="hidden" name="added_date" id="added_date" class="form-control" value="<?php echo(date("Y-m-d h:i:sa")); ?>" >
                                    </div>
                
                                    <div class="col-12">
                                        <input type="hidden" name="edited_date" id="edited_date" class="form-control" value="<?php echo(date("Y-m-d h:i:sa")); ?>">
                                    </div>
                
                                    <div class="col-12">
                                        <input type="hidden" name="status" id="status" class="form-control" value ="<?php echo $detail->status; ?>">
                                    </div>
                
                                </div>
                
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-primary" value="Save">
                                </div>
                
                            </div>
                        </form>
                    </div>