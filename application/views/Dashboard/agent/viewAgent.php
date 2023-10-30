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
                <span class="badge rounded-pill bg-dark"><h3 class="card-title">Current Agent List</h3></span>

                <div class="card-tools">
                    <a href="http://localhost/Supermarket1/AgentController/" class="btn btn-sm btn-info float-right">Add Agent</a>
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  
                  <table border="1" class="table table-striped table-hover">
                    <thead class="table-dark">
                    <tr>
                    <th>ID</th>
                    <th>Agent.Name</th>
                    <!-- <th>Agent.ID</th> -->
                    <th>Reg.No</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>Agent Head</th>
                    <th>Description</th>
                    <th>Added date</th>
                    <th>Edited date</th>
                    <!-- <th>Status</th> -->
                    <th>Action</th>
                </tr>
                </thead>
                    <?php foreach($agent1 as $row): ?>
                    <tr>
                        <td><a href="http://localhost/Supermarket1/AgentController/getContactPersons/<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
                        <td><?php echo $row['agent_name']; ?></td>
                        <!-- <td><?php //echo $row['agent_id']; ?></td> -->
                        <td><?php echo $row['reg_no']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['head_name']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['added_date']; ?></td>
                        <td><?php echo $row['edited_date']; ?></td>
                        <!-- <td><?php //echo $row['status']; ?></td> -->
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                               
                                <a href="editAgent/<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-success" name="edit" >Edit</button></a>
                                &nbsp;<a href="deleteAgent/<?php echo $row['id']; ?>"><button type="button" class="btn btn-sm btn-danger" name="delete" >Delete</button></a>
                                
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </table>
                  
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
