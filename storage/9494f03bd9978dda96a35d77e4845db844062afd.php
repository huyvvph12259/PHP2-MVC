<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="<?php echo e(BASE_URL . '/public/adminlte/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Alexander Pierce</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="<?php echo e(BASE_URL); ?>" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Danh mục
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">6</span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo e(BASE_URL . 'danh-muc'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(BASE_URL . 'danh-muc/add'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Tạo mới</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Sản phẩm
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">6</span>
          </p>  
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo e(BASE_URL . 'san-pham'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(BASE_URL . 'san-pham/add'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Tạo mới</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div><?php /**PATH C:\xampp\htdocs\PHP2\lesson5\app\views/layouts/sidebar.blade.php ENDPATH**/ ?>