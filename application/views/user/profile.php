<!-- Page Heading -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
</nav>

<div class="mb-3">
    <?= $this->session->flashdata('message') ?>
</div>

<div class="row mb-3">
    <div class="col-sm-4 col-sm-4 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="text-uppercase"><strong>Foto profile</strong></h5>
            </div>
            <div class="card-body">
                <?php
                if ($get_foto_profile == null) { ?>
                    <img src="<?= base_url('assets/img/undraw_profile.svg') ?>" alt="" srcset="" class="img-rounded">
                <?php } else { ?>
                    <img src="<?= base_url('upload/image/profile/' . $get_foto_profile['foto']) ?>" alt="" srcset="" class="rounded" width="285" height="350">
                <?php }
                ?>
                <div class="text-center justify-content-center mt-3">
                    <a href="#" class="btn btn-primary btn-md" data-toggle="modal" data-target=".modalFoto">
                        <i class="fas fa-camera"></i> Ubah Foto
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-8 col-sm-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="text-uppercase"><strong>Data Diri</strong></h5>
            </div>
            <div class="card-body">
                <?php 
                    if ($get_data_diri == null) { ?>
                        <form action="<?= base_url('user/save_data_diri') ?>" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="nisn" id="NISN" class="form-control" placeholder="NISN">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="nama" id="Nama" class="form-control" placeholder="Nama Alumni">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-location-arrow"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="tempat_lahir" id="tempatLahir" class="form-control" placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <input type="date" name="tanggal_lahir" id="tanggalLahir" class="form-control" placeholder="Tanggal Lahir">
                                    </div>
                                </div>
                            </div>

                            <div class=" row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-venus-mars"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="jenis_kelamin" id="jenisKelamin" class="form-control" placeholder="Jenis Kelamin">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-praying-hands"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="agama" id="Agama" class="form-control" placeholder="Agama">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-location-arrow"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="provinsi" id="Provinsi" class="form-control" placeholder="Provinsi">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-location-arrow"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="kota" id="Kota" class="form-control" placeholder="Kota">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-location-arrow"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="Kecamatan">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="telepon" id="Telepon" class="form-control" placeholder="Nomor Telepon">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="alamat" id="Alamat" cols="10" rows="5" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-md">Submit</button>

                        </form>
                    <?php } else { ?>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="">NISN</label>
                            </div>
                            <div class="col-sm-6"> 
                                <p class="text-dark text-uppercase">: <strong><?= $get_data_diri['nisn'] ?></strong></p>
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
                                <p class="text-dark text-uppercase">: <strong><?= $get_data_diri['alamat'] ?>, <?= $get_data_diri['kecamatan'] ?>, <?= $get_data_diri['kota'] ?>,<?= $get_data_diri['provinsi'] ?></strong></p>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary btn-block">Update Data Diri</a>
                    <?php }
                ?>
            </div>
        </div>
    </div>

</div>

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

<div class="row">
    <div class="col-sm-12 col-sm-12">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="text-uppercase"><strong>CV</strong></h5>
            </div>
            <div class="card-body">
                <p class="text-center">Anda belum mengisi CV Anda</p>
            </div>
            <div class="card-footer">
                <div class="d-flex d-none">
                    <a href="#" class="btn btn-primary btn-md">Tambah</a>
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

<div class="modal fade modalJob" tab-index="-1" role="dialog" aria-labelledby="modalTambahJob" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5>Tambah Data Kampus</h5>
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

<div class="modal fade modalFoto" tab-index="-1" role="dialog" aria-labelledby="modalTambahJob" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5>Upload Foto</h5>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('user/upload_foto'); ?>
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