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
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?= $this->session->flashdata('message') ?>
                <div class="card shadow my-4">
                    <div class="card-body cardbody-color p-lg-5">
                        <?= form_open_multipart('auth/input_biodata') ?>
                        <div class="text-center mb-4">
                            <h4 class="font-weight-bold ">Lengkapi Biodata</h4>
                        </div>

                        <div class="mb-3" hidden>
                            <input type="text" name="nisn" id="NISN" class="form-control" value="<?= $id_account ?>">
                            <div class="mt-2"><?= form_error('nisn') ?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="font-weight-bold">Nomor Induk</label>
                                <input type="text" name="nisn" id="NISN" class="form-control" placeholder="ex : 0123456789">
                                <div class="mt-2"><?= form_error('nisn') ?></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="font-weight-bold">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" value="<?= $nama ?>" readonly>
                                <div class=" mt-2"><?= form_error('nama') ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="font-weight-bold">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="ex : Tangerang">
                                <div class=" mt-2"><?= form_error('tempat_lahir') ?></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="font-weight-bold">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $tanggal_lahir ?>" readonly>
                                <div class=" mt-2"><?= form_error('tanggal_lahir') ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="font-weight-bold">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="JenisKelamin" class="form-control">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                <div class=" mt-2"><?= form_error('tanggal_lahir') ?></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="font-weight-bold">Pilih Agama</label>
                                <select name="agama" id="Agama" class="form-control">
                                    <option value="L">Islam</option>
                                    <option value="P">Kristen Protestan</option>
                                    <option value="P">Kristen Katolik</option>
                                    <option value="P">Hindu</option>
                                    <option value="P">Budha</option>
                                    <option value="P">Khong Hu Chu</option>
                                </select>
                                <div class=" mt-2"><?= form_error('agama') ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="" class="font-weight-bold">No Telepon</label>
                                <input type="number" name="telepon" class="form-control" id="telepon" placeholder="ex : 081234567890">
                                <div class=" mt-2"><?= form_error('telepon') ?></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">

                                <label for="" class="font-weight-bold">Angkatan Tahun</label>
                                <?php
                                echo "<select class=\"form-control\" name=\"tahun_lulusan\">";
                                echo "<option>Pilih Tahun Lulus</option>";
                                foreach (range(2000, date('Y') + 1) as $year) {
                                    echo "<option value=\"" . $year . "\">" . $year . "</option>";
                                }
                                echo "</select>";
                                ?>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="font-weight-bold">Alamat Lengkap</label>
                            <textarea name="alamat" id="Alamat" class="form-control" cols="30" rows="10" placeholder="ex : Jl. Cisadane Raya VIII Perumnas 1 RT 001 RW 001 Nusa Jaya Karawaci Kota Tangerang"></textarea>
                            <div class=" mt-2"><?= form_error('alamat') ?></div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto_profile" id="foto_profile" aria-describedby="fotoProfile">
                                <label class="custom-file-label" for="fotoProfile">Upload Foto Disini</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-block btn-color px-5">Submit Biodata</button>
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