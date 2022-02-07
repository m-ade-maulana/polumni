<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">Karir</li>
        <li class="breadcrumb-item active">Detil Jobs</li>
    </ol>
</nav>
<?php 
    foreach ($get_detil_lowongan as $gdl) { ?>
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <img src="<?= base_url('upload/image-job/' . $gdl['logo_perusahaan']); ?>" class="img-fluid" alt="...">
                    </div>
                    <div class="col-md-10">
                        <h4 class="card-title text-danger text-uppercase"><strong><?= $gdl['nama_perusahaan'] ?></strong></h4>
                        <p class="card-text text-justify"><?= $gdl['deskripsi'] ?></p>
                        <p class="card-text text-justify"><?= $gdl['email'] ?></p>
                        <p class="card-text text-justify"><?= $gdl['telepon'] ?></p>
                        <p class="card-text"><small class="text-muted">Ended for jobs at <?= $gdl['masa_berakhir'] ?></small></p>
                        <button type="button" class="btn btn-primary btn-sm">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h5 style="color: black">Deskripsi</h5>
                <p class="text-justify"><?= $gdl['deskripsi']?></p>

                <hr class="sidebar-divider d-none d-md-block">

                <h5 style="color: black">Requirement</h5>
                <ol>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </li>
                </ol>

                <hr class="sidebar-divider d-none d-md-block">

                <h5 style="color: black">Tentang Perusahaan</h5>
                <p class="text-justify"><?= $gdl['deskripsi'] ?></p>
            </div>
        </div>

        <a href="<?= base_url('user/karir') ?>" class="btn btn-primary btn-sm mb-3">Kembali Ke Karir</a>
    <?php }
?>
