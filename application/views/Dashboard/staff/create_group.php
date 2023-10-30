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

              <h1><?php echo lang('create_group_heading');?></h1>
        <p><?php echo lang('create_group_subheading');?></p>
        
        <div id="infoMessage"><?php echo $message;?></div>
        
        <?php echo form_open("auth/create_group");?>
        
              <p>
                    <?php echo lang('create_group_name_label', 'group_name');?> <br />
                    <?php echo form_input($group_name);?>
              </p>
        
              <p>
                    <?php echo lang('create_group_desc_label', 'description');?> <br />
                    <?php echo form_input($description);?>
              </p>
        
              <!-- <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p> -->
              <p><button type="submit" class="btn btn-primary">Create Group</button>
          <a href="<?php echo $base_url; ?>auth/"><button type="button" class="btn btn-default">Cancel</button></a></p>
        
        <?php echo form_close();?>
        
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
