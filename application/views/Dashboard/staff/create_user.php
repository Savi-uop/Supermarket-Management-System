<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('Dashboard/tpl/header')  ?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('Dashboard/tpl/nav')  ?>
  <!-- /.navbar -->
    <?php $this->load->view('Dashboard/tpl/aside')  ?>
  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo lang('index_heading');?> / Staff</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">Home</a></li>
              <li class="breadcrumb-item active">Staff</li>
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
                     
          <!-- Main content Area  -->    
        <div class="container">
        
        <?php echo form_open("auth/create_user",'class="form-signin"');?>
      <h2 class="form-signin-heading"><?php echo lang('create_user_heading');?></h1>
      <div id="infoMessage"><?php echo $message;?></div>
      <p>
      <?php echo lang('create_user_fname_label', 'first_name');?>
      <?php echo form_input($first_name, '', 'class="form-control" placeholder="First name" required autofocus'); ?>
      </p>
      <p>
      <?php echo lang('create_user_lname_label', 'last_name');?>
      <?php echo form_input($last_name, '', 'class="form-control" placeholder="last name" required'); ?>
      </p>
      <p>
      <?php echo lang('create_user_company_label', 'company');?>
      <?php echo form_input($company,'', 'class="form-control" placeholder="Company" required');?>
      </p>
      <p>
      <?php echo lang('create_user_email_label', 'email');?>
      <?php echo form_input($email,'', 'class="form-control" placeholder="Email" required');?>
      </p>
      <p>
      <?php echo lang('create_user_phone_label', 'phone');?>
      <?php echo form_input($phone,'', 'class="form-control" placeholder="Phone"');?>
      </p>
      <p>
      <?php echo lang('create_user_password_label', 'password');?>
      <?php echo form_input($password,'', 'class="form-control" placeholder="Password" required');?>
      </p>
      <p>
      <?php echo lang('create_user_password_confirm_label', 'password_confirm');?>
      <?php echo form_input($password_confirm,'', 'class="form-control" placeholder="Confirm password" required');?>
      </p>
      
      
      
      <p><button type="submit" class="btn btn-primary">Create User</button>
          <a href="<?php echo $base_url; ?>auth/"><button type="button" class="btn btn-default">Cancel</button></a></p>
      <?php echo form_close(); ?>
      
          
        
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
