<!-- Page Heading -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Karir</li>
    </ol>
</nav>
<?php
$numofcol = 4;
$rowcount = 0;
$bootstrapcolwidth = 12;

if ($rowcount % $numofcol == 0) { ?>
    <div class="row">
    <?php }
$rowcount++; ?>
    <div class="col-sm-<?= $bootstrapcolwidth ?>">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('upload/image-job/ACC_Logo_Member_of_Astra-01.png'); ?>" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title text-danger text-uppercase"><strong>Staff IT</strong></h4>
                        <p class="card-text text-justify">Astra Credit Companies atau biasa disingkat dengan ACC adalah salah satu perusahaan pembiayaan mobil terbesar di Indonesia</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="<?= base_url('user/detilJobs') ?>" class="btn btn-primary btn-sm">Detail Job</a>
                    </div>
                </div>
            </div>
        </div>
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