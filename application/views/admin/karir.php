<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <div class="d-none d-sm-inline-block">
        <span>Dashboard /</span>
        <a href="#">Lib</a>
    </div>
</div>

<button class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target=".modalTambahKarir">Tambah Lowongan</button>

<div class="mb-3">
    <?= $this->session->flashdata('message') ?>
</div>

<?php
$numOfCols = 1;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
foreach ($get_lowongan as $gl) {
    if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                                                        $rowCount++; ?>
        <div class="col-sm-<?= $bootstrapColWidth ?>">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <img src="<?= base_url('upload/image-job/' . $gl['logo_perusahaan']); ?>" class="card-img" alt="..." width="100" height="300">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4 class="card-title text-danger text-uppercase"><strong><?= $gl['posisi'] ?></strong></h4>
                            <p class="card-text text-justify"><?= $gl['deskripsi'] ?></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <a href="<?= base_url('admin/deletejobs/' . $gl['id_jobs']) ?>" class="btn btn-danger btn-sm">Deleted Jobs</a>
                            <a href="<?= base_url('admin/delete/' . $gl['id_jobs']) ?>" class="btn btn-success btn-sm">Edit Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if ($rowCount % $numOfCols == 0) { ?>
        </div> <?php }
        } ?>

<div class="modal fade modalTambahKarir" tab-index="-1" role="dialog" aria-labelledby="modalTambahKarir" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content ">
            <div class="modal-header bg-primary text-white">
                <h5>Tambah Lowongan Kerja</h5>
            </div>
            <?php echo form_open_multipart('admin/tambahKarir'); ?>
            <div class="modal-body">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-building"></i>
                            </div>
                        </div>
                        <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-user-tie"></i>
                            </div>
                        </div>
                        <input type="text" name="posisi" id="posisis" class="form-control" placeholder="Posisi" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-map-pin"></i>
                            </div>
                        </div>
                        <input type="text" name="penempatan" id="penempatan" class="form-control" placeholder="Penempatan" required>
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5" placeholder="Alamat" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="50" rows="5" placeholder="Deskripsi Pekerjaan" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" name="persyaratan" id="persyaratan" cols="30" rows="5" placeholder="Persyaratan" required></textarea>
                    </div>
                    <script type="text/javascript">
                        tinymce.init({
                            selector: 'textarea',
                            menubar: false,
                            width: '100%',
                            plugins: 'lists',
                            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist'
                        });
                        tinymce.triggerSave();
                    </script>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <input type="tel" name="telepon" id="telepon" class="form-control" placeholder="Telepon" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Masa Berakhir</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <input type="date" name="masa_berakhir" id="masa_berakhir" class="form-control" placeholder="Telepon" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label for="logo_perusahaan">Upload Logo</label>
                                <input type="file" name="logo_perusahaan" id="logo_perusahaan" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-md">Tambah</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>