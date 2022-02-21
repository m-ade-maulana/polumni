<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

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

                        <div class="text-center mb-4">
                            <h4 class="font-weight-bold ">Registered Account</h4>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" name="nama" id="Username" placeholder="Nama" value="<?= set_value('nama') ?>">
                            <div class="mt-2"><?= form_error('nama') ?></div>
                        </div>
                        <div class="mb-3">
                            <input type="date" name="tanggalLahir" class="form-control" id="password" placeholder="Tanggal Lahir" value="<?= set_value('tanggalLahir') ?>">
                            <div class=" mt-2"><?= form_error('tanggalLahir') ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= set_value('email') ?>">
                            <div class=" mt-2"><?= form_error('email') ?>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="username" class="form-control" id="password" placeholder="Username" value="<?= set_value('username') ?>">
                                <div class="mt-2"><?= form_error('username') ?></div>
                            </div>
                            <div class="mb-3">
                            </div>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            <div class="mt-2"><?= form_error('password') ?></div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-block btn-color px-5 mb-5">Registered</button>
                        </div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">Have Account ? <a href="<?= base_url('auth') ?>" class=" fw-bold"> Login Here</a>
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