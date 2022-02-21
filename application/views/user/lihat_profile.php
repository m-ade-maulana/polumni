<!-- Page Heading -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
        <li class="breadcrumb-item" aria-current="page">Lihat Profile</li>
    </ol>
</nav>

<div class="mb-3">
    <?= $this->session->flashdata('message') ?>
</div>

<?php

if ($get_data_diri) { ?>
    <div class="row mb-3">
        <div class="col-sm-12 col-sm-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="text-uppercase"><strong>Data Diri</strong></h5>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <img src="<?= base_url('upload/image/profile/' . $get_data_diri['foto']) ?>" class="img-fluid rounded" alt="">
                            <button type="button" class="btn btn-md btn-primary btn-block mt-2" data-toggle="modal" data-target=".modalUpdateFoto_<?= $get_data_diri['id_account'] ?>">Update Foto</button>

                        </div>
                        <div class="col-md-6">

                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="">NISN</label>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-dark text-uppercase">: <strong>
                                            <?php
                                            if ($get_data_diri['nisn'] == null) {
                                                echo "-";
                                            } else {
                                                echo $get_data_diri['nisn'];
                                            }
                                            ?>
                                        </strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="">Nama</label>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-dark text-uppercase">: <strong><?= $get_data_diri['nama'] ?></strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="">Tempat Lahir</label>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-dark text-uppercase">: <strong><?= $get_data_diri['tempat_lahir'] ?></strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="">Tanggal Lahir</label>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-dark text-uppercase">: <strong><?= $get_data_diri['tanggal_lahir'] ?></strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="">Jenis Kelamin</label>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-dark text-uppercase">: <strong><?= $get_data_diri['jenis_kelamin'] ?></strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="">Agama</label>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-dark text-uppercase">: <strong><?= $get_data_diri['agama'] ?></strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="">Alamat</label>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-dark text-uppercase">: <strong><?= $get_data_diri['alamat'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" data-toggle="modal" data-target=".modalUpdateDiri_<?= $get_data_diri['id_account'] ?>" class="btn btn-primary btn-block">Update Data Diri</button>

                </div>
            </div>
        </div>
    </div>

<?php } else { ?>
    <script>
        setTimeout(function() {
            swal({
                title: "Maaf!",
                text: "Anda belum melengkapi biodata !",
                icon: "error",
            }).then(function() {
                window.location = "isi_profile";
            });
        })
    </script>
<?php }
?>

<?php
if ($get_data_kampus) { ?>
    <div class="row mb-3">
        <div class="col-sm-12 col-sm-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="text-uppercase"><strong>Universitas</strong></h5>
                </div>
                <div class="card-body">
                    <table id="table" class="table table-striped table-bordered table-hover table-responsive-sm" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kampus</th>
                                <th>Jurusan</th>
                                <th>Jenjang</th>
                                <th>Tanggal Masuk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($get_data_kampus as $gdk) { ?>
                                <tr>
                                    <td>1</td>
                                    <td><?= $gdk['nama_kampus'] ?></td>
                                    <td><?= $gdk['nama_jurusan'] ?></td>
                                    <td><?= $gdk['jenjang'] ?></td>
                                    <td><?= $gdk['tanggal_masuk'] ?></td>
                                </tr>
                            <?php }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="d-flex d-none">
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".modalKampus">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modalKampus" tab-index="-1" role="dialog" aria-labelledby="modalTambahKampus" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5>Tambah Data Kampus</h5>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('user/save_data_kampus') ?>" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="id_account" id="id_account" class="form-control" value="<?= $id_account; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $nama; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-university"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="nama_kampus" id="Universitas" class="form-control" placeholder="Nama Kampus">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-search"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="nama_jurusan" id="Jurusan" class="form-control" placeholder="Jurusan">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-graduation-cap"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="jenjang" id="Jenjang" class="form-control" placeholder="Jenjang">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="date" name="tanggal_masuk" id="tahunMasuk" class="form-control" placeholder="Tahun Masuk">
                                    </div>
                                </div>
                                <div class="col-sm-6" id="tahunLulus">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="date" name="tanggal_keluar" class="form-control" placeholder="Tahun Lulus">
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mb-2 mr-sm-2">
                                <input class="form-check-input" type="checkbox" id="cek" value="1" onchange="valueChanged()">
                                <label class="form-check-label" for="inlineFormCheck">
                                    Present
                                </label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-md">Tambah</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php
if ($get_data_pekerjaan) { ?>
    <div class="row mb-3">
        <div class="col-sm-12 col-sm-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="text-uppercase"><strong>Pekerjaan</strong></h5>
                </div>
                <div class="card-body">
                    <table id="table-pekerjaan" class="table table-striped table-bordered table-hover table-responsive-sm" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Bidang Kerja</th>
                                <th>Jabatan</th>
                                <th>Tanggal Masuk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($get_data_pekerjaan as $gdp) { ?>
                                <tr>
                                    <td>1</td>
                                    <td><?= $gdp['nama_perusahaan'] ?></td>
                                    <td><?= $gdp['bidang'] ?></td>
                                    <td><?= $gdp['jabatan'] ?></td>
                                    <td><?= $gdp['tanggal_masuk'] ?></td>
                                </tr>
                            <?php }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="d-flex d-none">
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".modalJob">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modalJob" tab-index="-1" role="dialog" aria-labelledby="modalTambahJob" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5>Tambah Data Pekerajaan</h5>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('user/save_data_pekerjaan') ?>" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="id_account" id="id_account" class="form-control" value="<?= $id_account; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $nama; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-building"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="nama_perusahaan" id="Perusahaan" class="form-control" placeholder="Nama Perusahaan">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-briefcase"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="bidang" id="Bidang" class="form-control" placeholder="Bidang perusahaan">
                                    </div>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <input type="text" name="jabatan" id="Jabatan" class="form-control" placeholder="Jabatan">
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="date" name="tanggal_masuk" id="tahunMasuk" class="form-control" placeholder="Tahun Masuk">
                                    </div>
                                </div>
                                <div class="col-sm-6" id="tahunkeluar">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="date" name="tanggal_keluar" id="tahunKeluar" class="form-control" placeholder="Tahun Lulus">
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mb-2 mr-sm-2">
                                <input class="form-check-input" type="checkbox" id="check" value="1" onchange="valueJob()">
                                <label class="form-check-label" for="inlineFormCheck">
                                    Present
                                </label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-md">Tambah</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


<!-- <div class="row">
    <div class="col-sm-12 col-sm-12">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="text-uppercase"><strong>CV</strong></h5>
            </div>
            <div class="card-body">
                <p class="text-center">Fitur masih dalam tahap pengembangan</p>
            </div>
            <div class="card-footer">
                <div class="d-flex d-none">
                    <a href="#" class="btn btn-primary btn-md">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<?php
if ($get_data_diri) { ?>
    <div class="modal fade modalUpdateDiri_<?= $get_data_diri['id_account'] ?>" tab-index="-1" role="dialog" aria-labelledby="modalUpdateDiri" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5>Update Data Diri</h5>
                </div>
                <form action="<?= base_url('user/update_data_diri') ?>" method="post">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <?php
                                        if ($get_data_diri['nisn'] == null) { ?>
                                            <input type="text" name="nisn" id="NISN" class="form-control" placeholder="-">
                                        <?php } else { ?>
                                            <input type="text" name="nisn" id="NISN" class="form-control" value="<?= $get_data_diri['nisn']; ?>" readonly>
                                        <?php }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $get_data_diri['nama']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-building"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="tempat_lahir" id="Tempat_Lahir" class="form-control" value="<?= $get_data_diri['tempat_lahir'] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-briefcase"></i>
                                            </div>
                                        </div>
                                        <input type="date" name="tanggal_lahir" id="Tanggal_Lahir" class="form-control" value="<?= $get_data_diri['tanggal_lahir'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="jenis_kelamin" id="Jenis_Kelamin" class="form-control" value="<?= $get_data_diri['jenis_kelamin']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="agama" id="Agama" class="form-control" value="<?= $get_data_diri['agama']; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat" id="Alamat" cols="30" rows="10"><?= $get_data_diri['alamat'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-md">Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade modalUpdateFoto_<?= $get_data_diri['id_account'] ?>" tab-index="-1" role="dialog" aria-labelledby="modalTambahJob" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5>Upload Foto</h5>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('user/update_foto'); ?>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <input type="file" name="foto_profile" id="foto_profile" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-md">Upload</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php }
?>