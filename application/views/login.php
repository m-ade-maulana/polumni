<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>

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
    <?= $this->session->flashdata('message') ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card shadow my-4">
                    <form action="<?= base_url('auth/login') ?>" method="POST" class="card-body cardbody-color p-lg-5">

                        <div class="text-center">
                            <img src="<?= base_url('assets/img/logo.png') ?>" class="img-fluid my-3" alt="profile">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" name="username" id="Username" aria-describedby="emailHelp" placeholder="Username" value="<?= set_value('username') ?>">
                            <div class="mt-2 text-danger">
                                <?= form_error('username') ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="password" placeholder="password">
                            <div class="mt-2 text-danger">
                                <?= form_error('password') ?>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-block btn-color px-5 mb-5">Login</button>
                        </div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Belum terdaftar ? <a href="<?= base_url('auth/registered') ?>" class="fw-bold"> Buat akun disini</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>

</html>