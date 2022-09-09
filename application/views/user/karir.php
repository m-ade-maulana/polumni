<!-- Page Heading -->

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><img src="<?= base_url('assets/img/bkk.png') ?>" alt="bkk" srcset="" width="24" height="24"> Informasi BKK</li>
    </ol>
</nav>

<div class="alert alert-danger" role="alert">
    <h3><strong>Informasi !</strong></h3>
    <p>BKK memberikan informasi tentang lowongan pekerjaan yang saat ini sedang di buka oleh perusahaan yang bekerja sama dengan BKK Nusantara, cek lowongan pekerjaan di bawah ini </p>
</div>
<div class="card">
    <div class="card-header bg-primary">
        <h5 class="text-white">Info Lowongan Kerja</h5>
    </div>
    <div class="card-body">

        <?php
        $numOfCols = 2;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        foreach ($get_lowongan as $gl) {
            if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                                                                $rowCount++; ?>

                <div class="col-sm-<?= $bootstrapColWidth ?>">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 ">
                                <?php
                                if ($gl['logo_perusahaan'] == "") { ?>
                                    <img src="<?= base_url('upload/image-job/' . $gl['logo_perusahaan']); ?>" class="img-fluid" alt="...">
                                <?php } else { ?>
                                    <img src="<?= base_url('upload/image-job/' . $gl['logo_perusahaan']); ?>" class="img-fluid" alt="...">
                                <?php } ?>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title text-danger text-uppercase"><strong><?= $gl['posisi'] ?></strong></h4>
                                    <p class="card-text text-justify"><?= $gl['deskripsi'] ?></p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="<?= base_url('user/detiljobs/' . $gl['id_jobs']) ?>" class="btn btn-primary btn-sm">Detil Jobs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if ($rowCount % $numOfCols == 0) { ?>
                </div> <?php }
                } ?>
    </div>
</div>
<div class="modal fade modalJobs" tab-index="-1" role="dialog" aria-labelledby="modalDetilJobs" aria-hidden="true">
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