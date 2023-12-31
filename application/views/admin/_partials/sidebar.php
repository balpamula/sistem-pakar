<aside class="main-sidebar sidebar-light-primary elevation-1">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('Dashboard'); ?>" class="brand-link">
        <!-- <img src="<?= base_url('assets/'); ?>img/logo/sekarsari.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8"> -->
        <span class="brand-text font-weight-bold text-center" style="justify-content: center; display:flex;"><?php echo SITE_NAME ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) 
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/admin/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>
        -->
        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo site_url('Dashboard'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <!--
                <li class="nav-item">
                    <a href="<?php echo site_url('Hidangan'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-utensils"></i>
                        <p>
                            Hidangan
                        </p>
                    </a>
                </li>
                -->
                <li class="nav-item">
                    <a href="<?php echo site_url('Ciri'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>
                            Ciri
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('Kepribadian'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Kepribadian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('Rule'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>
                            Rule
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('Riwayat'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-history"></i>
                        <p>
                            Riwayat Diagnosa
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?php echo site_url('Gambar'); ?>" class="nav-link">
                        <i class="nav-icon fas fas fa-image"></i>
                        <p>
                            Gambar
                        </p>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>