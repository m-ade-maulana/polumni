<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://kit.fontawesome.com/f724858d1a.js" crossorigin="anonymous"></script>
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
            /* background-color: #ebf2fa; */
            background-color: #FFD32D;
        }

        a {
            text-decoration: none;
        }
    </style>

    <title><?= $title ?></title>

</head>

<body>
    <script>
        <?= $this->session->flashdata('message') ?>
    </script>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card  shadow my-4">
                    <form action="<?= base_url('auth/login') ?>" method="POST" class="card-body cardbody-color p-lg-5">
                        <div class="text-center">
                            <img src="<?= base_url('assets/img/logo.png') ?>" class="img-fluid my-3" alt="profile">
                        </div>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" name="username" id="Username" aria-describedby="emailHelp" placeholder="Username" value="<?= set_value('username') ?>">
                            <div class="mt-2 text-danger">
                                <?= form_error('username') ?>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" id="password" placeholder="password">
                            <div class="mt-2 text-danger">
                                <?= form_error('password') ?>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-block btn-color font-weight-bold px-5 mb-5">
                                Login <i class="fas fa-sign-in-alt"></i>
                            </button>
                        </div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Belum terdaftar ? <a href="<?= base_url('auth/registered') ?>" class="fw-bold"> Buat akun disini</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalPesan" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h3 class="modal-title font-weight-bold text-white">Pesan</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <i class="fas fa-times-circle text-white"></i>
                    </button>
                </div>
                <div class="modal-body text-justify">
                    <p class="font-weight-bold">Portal Alumni</p>
                    <p>Untuk selalu menjaga silahturahmi SMK Nusantara 1 Kota Tangerang dengan peserta didik yang telah lulus dan untuk meingkatkan kualitas lulusan ke depannya, kami memohon untuk berkenan mengisikan data - data pada link Google Form berikut.</p>
                    <p>Tim BKK SMK Nusantaraa 1 Kota Tangerang mengucapkan terima kasih dan salam sukses</p>
                    <p>Salam <br> BKK SMK Nusantara 1 Kota Tangerang</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#modalPesan").modal('show');
        })
    </script>
</body>

</html>