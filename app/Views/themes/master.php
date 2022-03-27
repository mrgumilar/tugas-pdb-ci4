<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $title ?></title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="<?= base_url()?>/themes/be/assets/images/favicon.ico">
    <script src="<?= base_url()?>/themes/be/assets/js/jquery.min.js"></script>
    <!-- Datatable init js -->
    <script src="<?= base_url()?>/themes/be/assets/pages/datatables.init.js"></script>
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/themes/be/assets/plugins/morris/morris.css">

    <link href="<?= base_url()?>/themes/be/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url()?>/themes/be/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url()?>/themes/be/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url()?>/themes/be/assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="<?= base_url()?>/themes/be/assets/plugins/datatables/dataTables.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?= base_url()?>/themes/be/assets/plugins/datatables/buttons.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?= base_url()?>/themes/be/assets/plugins/datatables/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="<?= base_url('dashboard')?>" class="logo">
                    <span class="logo-light">
                    NURUL MUTA’ALLIMIN 2
                    </span>
                    <span class="logo-sm">
                        <i class="mdi mdi-camera-control"></i>
                    </span>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">



                    <?= $this->include('themes/navbar')?>


                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>

                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <?= $this->include('themes/sidebar')?>
                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <?= $this->renderSection('bc')?>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->
                    <?= $this->renderSection('isi')?>
                </div>
                <!-- END ROW -->

            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->

        <footer class="footer">
            2022 <span class="d-none d-sm-inline-block"> Dibuat Oleh <i class="mdi mdi-heart text-danger"></i> Gumilar
                Hasta Pratama</span>.
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- jQuery  -->
    
    <script src="<?= base_url()?>/themes/be/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/js/metismenu.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/js/waves.min.js"></script>
    <!--Morris Chart-->
    <script src="<?= base_url()?>/themes/be/assets/plugins/morris/morris.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/pages/dashboard.init.js"></script>
    <!-- App js -->
    <script src="<?= base_url()?>/themes/be/assets/js/app.js"></script>
    <!-- Required datatable js -->
    <script src="<?= base_url()?>/themes/be/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="<?= base_url()?>/themes/be/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/plugins/datatables/jszip.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="<?= base_url()?>/themes/be/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    

    <script>
    const user_id = '<?= session()->get('user_id') ?>'
    const base_url = '<?= base_url('/') ?>'
    const date = '<?= date('Y-m-d') ?>'
    </script>
    <script>
    $('#logout').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin ingin logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= site_url('login/logout') ?>",
                    type: 'post',
                    dataType: 'json',
                    success: function(response) {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Anda berhasil logout!",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1250
                        }).then(function() {
                            window.location = '<?= site_url('login') ?>';
                        });
                    }
                });
            }
        })
    })
    </script>

</body>

</html>