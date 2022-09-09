<!-- Page Heading -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
</nav>

<div class="mb-3">
    <?= $this->session->flashdata('message') ?>
</div>

<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <?php if ($get_data_diri) {
            echo "<div class='card bg-success shadow-sm h-100 py-2'>";
        } else {
            echo "<div class='card bg-danger shadow-sm h-100 py-2'>";
        } ?>

        <div class="card-body">
            <div class="row no-gutter">
                <div class="col mr-2">
                    <div class="text-xl font-weight-bold text-white text-uppercase mb-1">
                        Isi Biodata
                    </div>
                    <div class="mb-0 font-weight-bold ">
                        <?php if ($get_data_diri) {
                            echo "<p class='text-white'>Sudah diisi</p>";
                        } else {
                            echo "<a href='#' class='text-white' data-toggle='modal' data-target='.modalBiodata'>klik disini</a>";
                        } ?>

                    </div>
                </div>
                <div class="col-mr-auto">
                    <i class="fas fa-user fa-3x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <?php if ($get_data_kampus) {
        echo "<div class='card bg-success shadow-sm h-100 py-2'>";
        // var_dump($get_data_kampus);
    } else {
        echo "<div class='card bg-danger shadow-sm h-100 py-2'>";
    } ?> <div class="card-body">
        <div class="row no-gutter">
            <div class="col mr-2">
                <div class="text-xl font-weight-bold text-white text-uppercase mb-1">
                    Isi Pendidikan
                </div>
                <div class="mb-0 font-weight-bold ">
                    <?php if ($get_data_kampus) {
                        echo "<p class='text-white'>Sudah diisi</p>";
                    } else {
                        echo "<a href='#' class='text-white' data-toggle='modal' data-target='.modalKampus'>klik disini</a>";
                    } ?>
                </div>
            </div>
            <div class="col-mr-auto">
                <i class="fas fa-school fa-3x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <?php if ($get_data_pekerjaan) {
        echo "<div class='card bg-success shadow-sm h-100 py-2'>";
    } else {
        echo "<div class='card bg-danger shadow-sm h-100 py-2'>";
    } ?>
    <div class="card-body">
        <div class="row no-gutter">
            <div class="col mr-2">
                <div class="text-xl font-weight-bold text-white text-uppercase mb-1">
                    Isi Pekerjaan
                </div>
                <div class="mb-0 font-weight-bold">
                    <?php if ($get_data_pekerjaan) {
                        echo "<p class='text-white'>Sudah diisi</p>";
                    } else {
                        echo "<a href='#' class='text-white' data-toggle='modal' data-target='.modalJob'>klik disini</a>";
                    } ?>
                    <!-- <a href="#" class="text-white" data-toggle="modal" data-target=".modalJob">klik disini</a> -->
                </div>
            </div>
            <div class="col-mr-auto">
                <i class="fas fa-briefcase fa-3x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-danger shadow-sm h-100 py-2">
        <div class="card-body">
            <div class="row no-gutter">
                <div class="col mr-2">
                    <div class="text-xl font-weight-bold text-white text-uppercase mb-1">
                        Masukan CV
                    </div>
                    <div class="mb-0 font-weight-bold ">
                        <a href="#" class="text-white">klik disini</a>
                    </div>
                </div>
                <div class="col-mr-auto">
                    <i class="fas fa-file fa-3x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-stripped table-hover table-responsive-sm display" id="table_data_join">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Unduh CV</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $get_data_join['nama'] ?></td>
                    <td><?= $get_data_join['jenjang'] ?></td>
                    <td><?= $get_data_join['jabatan'] ?></td>
                    <td><a href="#" class="btn btn-primary btn-block btn-sm">Unduh</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade modalBiodata" tab-index="-1" role="dialog" aria-labelledby="modalTambahBiodata" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5>Biodata</h5>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('user/save_data_diri') ?>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="" class="font-weight-bold">NISN</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <input type="text" name="nisn" id="NISN" class="form-control" placeholder="...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="font-weight-bold">Nama</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <input type="text" name="nama" id="Nama" class="form-control" value="<?= $nama ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="" class="font-weight-bold">Tempat Lahir</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-location-arrow"></i>
                                </div>
                            </div>
                            <input type="text" name="tempat_lahir" id="tempatLahir" class="form-control" placeholder="..." required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="font-weight-bold">Tanggal Lahir</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-calendar"></i>
                                </div>
                            </div>
                            <input type="date" name="tanggal_lahir" id="tanggalLahir" class="form-control" value="<?= $tanggal_lahir ?>" readonly>
                        </div>
                    </div>
                </div>

                <div class=" row">
                    <div class="col-sm-6">
                        <label for="" class="font-weight-bold">Jenis Kelamin</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-venus-mars"></i>
                                </div>
                            </div>
                            <select class="form-control" name="jenis_kelamin" id="jenisKelamin" required>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="font-weight-bold">Agama</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-praying-hands"></i>
                                </div>
                            </div>
                            <select class="form-control" name="agama" id="Agama" required>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="font-weight-bold">Nomor Telepon</label>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input type="text" name="telepon" id="Telepon" class="form-control" placeholder="..." required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="font-weight-bold">Alamat</label>
                    <textarea name="alamat" id="Alamat" cols="10" rows="5" class="form-control" placeholder="Masukan Alamat Lengkap Anda" required></textarea>
                </div>

                <div class="form-group">
                    <label for="" class="font-weight-bold">Upload foto</label>
                    <input type="file" name="foto_profile" id="foto_profile" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary btn-md">Submit</button>

                </form>
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