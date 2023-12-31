<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php"); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view("admin/_partials/navbar.php"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("admin/_partials/sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?php echo ucfirst($this->uri->segment(1)) ?></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card elevation-1">
                                <div class="card-header py-3">
                                    <a>Tambah Data <?php echo ucfirst($this->uri->segment(1)) ?></a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form method="POST" action="<?= site_url('Kepribadian/edit'); ?>" enctype="multipart/form-data">
                                        <input type="hidden" name="kode" value="<?= $kepribadian->kode; ?>">
                                        <div class=" form-group">
                                            <div class="col-sm-6">
                                                <label>Nama</label>
                                                <input type="text" name="nama" class="form-control" value="<?= $kepribadian->nama; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>Detail</label>
                                                <textarea class="form-control" rows="8" name="detail"><?= $kepribadian->detail; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <label>Saran</label>
                                                <textarea class="form-control" rows="8" name="saran"><?= $kepribadian->saran; ?></textarea>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php echo base_url('Kepribadian'); ?>" class="btn btn-danger ">Batal</a>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <?php $this->load->view("admin/_partials/footer.php"); ?>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php $this->load->view("admin/_partials/js.php"); ?>
</body>

</html>