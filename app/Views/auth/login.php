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

    <link href="<?= base_url()?>/themes/be/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url()?>/themes/be/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url()?>/themes/be/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url()?>/themes/be/assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div class="accountbg"></div>

    <div class="wrapper-page">
        <div class="card card-pages shadow-none">

            <div class="card-body">
                <div class="text-center m-t-0 m-b-15">
                    <a href="<?= base_url('login')?>" class="logo logo-admin"><img
                            src="<?= base_url()?>/themes/be/assets/images/logo.png" alt="" height="50"></a>
                </div>
                <h5 class="font-18 text-center">Administrator</h5>
                <?php if (!empty(session()->getFlashdata('pesan_gagal'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    <?php echo session()->getFlashdata('pesan_gagal'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                <?= form_open('login/validasi', ['class' => 'formlogin']) ?>
                <?= csrf_field() ?>

                <!-- <form class="form-horizontal m-t-30" action="index.html"> -->

                <div class="form-group">

                    <div class="col-12">
                        <label>Username</label>
                        <input class="form-control" name="username" id="username" type="text">
                        <div class="invalid-feedback errorUsername">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label>Password</label>
                        <input class="form-control" name="password" id="password" type="password">
                        <div class="invalid-feedback errorPassword">
                        </div>
                    </div>
                </div>

                

                <div class="form-group text-center m-t-20">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block btn-lg waves-effect waves-light btnlogin"
                            type="submit">Log In</button>
                    </div>
                </div>
                <?= form_close() ?>
            </div>

        </div>
    </div>
    <!-- END wrapper -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- jQuery  -->
    <script src="<?= base_url()?>/themes/be/assets/js/jquery.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/js/metismenu.min.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url()?>/themes/be/assets/js/waves.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url()?>/themes/be/assets/js/app.js"></script>


    <script>
    $(document).ready(function() {
        $('.formlogin').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btnlogin').prop('disable', true);
                    $('.btnlogin').html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <i>Loading...'
                    )

                },
                complete: function() {
                    $('.btnlogin').prop('disable', false);
                    $('.btnlogin').html('Login')
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.username) {
                            $('#username').addClass('is-invalid');
                            $('.errorUsername').html(response.error.username);
                        } else {
                            $('#username').removeClass('is-invalid');
                            $('.errorUsername').html();
                        }

                        if (response.error.password) {
                            $('#password').addClass('is-invalid');
                            $('.errorPassword').html(response.error.password);
                        } else {
                            $('#password').removeClass('is-invalid');
                            $('.errorPassword').html();
                        }
                    }

                    if (response.sukses) {
                        Swal.fire({
                            title: "Berhasil!",
                            text: "Anda berhasil login!",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1250


                        }).then(function() {
                            window.location = response.sukses.link;
                        });

                    }

                    if (response.nonactive) {
                        Swal.fire({
                            title: "Oooopss!",
                            text: "User belum aktif!",
                            icon: "error",
                            showConfirmButton: false,
                            timer: 1250
                        });
                    }
                }
            });
            return false;
        });
    });
    </script>

</body>

</html>