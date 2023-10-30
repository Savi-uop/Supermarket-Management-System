<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $base_url; ?>" class="brand-link">
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
            <a href="<?php echo $base_url; ?>Auth/index" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Staff / User
                <span class="right badge badge-danger">6</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $base_url; ?>MainCategoryController/viewCategory" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Main Category
                <span class="right badge badge-info">10</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $base_url; ?>MainCategoryController/viewSubCategory" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sub Category
                <span class="right badge badge-danger">20</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $base_url; ?>ProductController/viewProduct" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Products
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="<?php echo $base_url; ?>ReportController/" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Reports
                <span class="right badge badge-danger">21</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
        <a href="<?php echo $base_url; ?>AgentController/viewAgent" class="nav-link">
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