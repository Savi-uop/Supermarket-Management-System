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
              <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">Home </a></li>
              <li class="breadcrumb-item active">Staff </li>
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
                     
                     
                   <div class="container">
        
       
        <p><?php echo lang('index_subheading');?></p>

        <div id="infoMessage"><?php echo $message;?></div>

    <table class="table table-striped table-hover" cellpadding=0 cellspacing=10>
        <thead class="table-dark">
    <tr>
        <th><?php echo lang('index_fname_th');?></th>
        <th><?php echo lang('index_lname_th');?></th>
        <th><?php echo lang('index_email_th');?></th>
        <th><?php echo lang('index_groups_th');?></th>
        <th><?php echo lang('index_status_th');?></th>
        <th><?php echo lang('index_action_th');?></th>
    </tr>
    </thead>
    <?php foreach ($users as $user):?>
        <tr>
            <td><?php echo $user->first_name;?></td>
            <td><?php echo $user->last_name;?></td>
            <td><?php echo $user->email;?></td>
            <td>
                <?php foreach ($user->groups as $group):?>
                    <?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
                <?php endforeach?>
            </td>
            <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link'),'class="badge badge-pill badge-success"') : anchor("auth/activate/". $user->id, lang('index_inactive_link'),'class="badge badge-pill badge-danger"');?></td>
            <!-- <td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td> -->
            <td><a href="http://localhost/Supermarket1/auth/edit_user/<?php echo $user->id;?>">
                <button type="button" class="btn btn-info btn-sm">Edit</button>
            </a>
            </td>
        </tr>
    <?php endforeach;?>
</table>

<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?> | <a href="<?php echo $base_url; ?>Auth/view_group">View Groups</a> </p>

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
