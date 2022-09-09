<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>

    <style type="text/css">
        .custom-file-input.selected:lang(en)::after {
            content: "" !important;
        }

        .custom-file {
            overflow: hidden;
        }

        .custom-file-input {
            white-space: nowrap;
        }

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
    <script>
        <?= $this->session->flashdata('message') ?>
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <script>
                    <?= $this->session->flashdata('message') ?>
                </script>
                <div class="card shadow my-4">
                    <div class="card-header bg-primary">
                        <h5 class="text-white font-weight-bold">Lengkapi Biodata</h5>
                    </div>
                    <div class="card-body p-lg-5">
                        <?= form_open_multipart('auth/input_biodata') ?>

                        <div class="form-group row">
                            <div class="col-md-4 mb-3">
                                <label for="" class="font-weight-bold">ID Account</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="id_account" id="IDAccount" class="form-control" value="<?= $id_account ?>" readonly>
                                <div class="mt-2"><?= form_error('id_account') ?></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="" class="font-weight-bold">Nomor Induk</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nisn" id="NISN" class="form-control" placeholder="ex : 0123456789">
                                <div class="mt-2"><?= form_error('nisn') ?></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="" class="font-weight-bold">Nama Lengkap</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nama" class="form-control" id="nama" value="<?= $nama ?>" readonly>
                                <div class=" mt-2"><?= form_error('nama') ?></div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="" class="font-weight-bold">Tempat Lahir</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="ex : Tangerang">
                                <div class=" mt-2"><?= form_error('tempat_lahir') ?></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="" class="font-weight-bold">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-8">
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $tanggal_lahir ?>" readonly>
                                <div class=" mt-2"><?= form_error('tanggal_lahir') ?></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="" class="font-weight-bold">Pilih Jenis Kelamin</label>
                            </div>
                            <div class="col-md-8">
                                <select name="jenis_kelamin" id="JenisKelamin" class="form-control">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                <div class=" mt-2"><?= form_error('tanggal_lahir') ?></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="" class="font-weight-bold">Pilih Agama</label>
                            </div>
                            <div class="col-md-8">
                                <select name="agama" id="Agama" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Kristen Protestan</option>
                                    <option value="Katolik">Kristen Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Khong Hu Chu">Khong Hu Chu</option>
                                </select>
                                <div class=" mt-2"><?= form_error('agama') ?></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="" class="font-weight-bold">No Telepon</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" name="telepon" class="form-control" id="telepon" value="<?= $telepon ?>" readonly>
                                <div class=" mt-2"><?= form_error('telepon') ?></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="" class="font-weight-bold">Email</label>
                            </div>
                            <div class="col-md-8">
                                <input type="email" name="email" class="form-control" id="Email" value="<?= $email ?>" readonly>
                                <div class=" mt-2"><?= form_error('email') ?></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="" class="font-weight-bold">Angkatan Tahun</label>
                            </div>
                            <div class="col-md-8">
                                <select name="tahun_lulusan" id="tahun_lulusan" class="form-control">
                                    <?php
                                    foreach (range(2000, date('Y') + 1) as $year) { ?>
                                        <option value="<?= $year ?>"><?= $year ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="" class="font-weight-bold">Alamat Lengkap</label>
                            </div>
                            <div class="col-md-8">
                                <textarea name="alamat" id="Alamat" class="form-control" cols="30" rows="10" placeholder="ex : Jl. Cisadane Raya VIII Perumnas 1 RT 001 RW 001 Nusa Jaya Karawaci Kota Tangerang"></textarea>
                                <div class=" mt-2"><?= form_error('alamat') ?></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="" class="font-weight-bold">Foto</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" name="foto_profile" id="foto_profile">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-block btn-primary px-5">Submit Biodata</button>
                            <a href="<?= base_url('auth/logout') ?>" class="btn btn-block btn-danger px-5 mb-5">Cancel</a>
                        </div>

                        </form>
                    </div>
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