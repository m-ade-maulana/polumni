<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

    <style type="text/css">
        .btn-color {
            background-color: #0e1c36;
            color: #fff;

        }

        .profile-image-pic {
            height: 200px;
            width: 200px;
            object-fit: cover;
        }



        .cardbody-color {
            background-color: #FFD32D;
        }

        a {
            text-decoration: none;
        }
    </style>

    <title><?= $title ?></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?= $this->session->flashdata('message') ?>
                <div class="card shadow my-4">
                    <form action="<?= base_url('auth/register') ?>" method="POST" class="card-body cardbody-color p-lg-5">

                        <div class="text-center">
                            <img src="<?= base_url('assets/img/Logo.png') ?>" class="img-fluid mb-3" alt="profile">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="nama" id="Username" class="form-control" placeholder="Nama" value="<?= set_value('nama') ?>">
                            <div class="mt-2"><?= form_error('nama') ?></div>
                        </div>
                        <div class="mb-3">
                            <input type="date" name="tanggal_lahir" id="TanggalLahir" class="form-control" placeholder="Tanggal Lahir">
                            <div class="mt-2"><?= form_error('tanggal_lahir') ?></div>
                        </div>
                        <div class="mb-3">
                            <input type="num" name="telepon" id="Telepon" class="form-control" placeholder="Nomor Telepon">
                            <div class="mt-2"><?= form_error('telepon') ?></div>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= set_value('email') ?>">
                            <div class=" mt-2"><?= form_error('email') ?></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" id="password" placeholder="Username" value="<?= set_value('username') ?>">
                            <div class="mt-2"><?= form_error('username') ?></div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text" id="show_hide_password">
                                    <a><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2"><?= form_error('password') ?></div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-block btn-color px-5 mb-5">Buat Akun</button>
                        </div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Punya akun ? <a href="<?= base_url('auth') ?>" class=" fw-bold"> Masuk Disini</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('input').attr("type") == "text") {
                    $('input').attr('type', 'password');
                    $('i').addClass("fa-eye-slash");
                    $('i').removeClass("fa-eye");
                } else if ($('input').attr("type") == "password") {
                    $('input').attr('type', 'text');
                    $('i').removeClass("fa-eye-slash");
                    $('i').addClass("fa-eye");
                }
            });
        });
    </script>
</body>

</html>