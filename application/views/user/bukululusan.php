<!-- Page Heading -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Buku Kelulusan</li>
    </ol>
</nav>

<?php
$numOfCols = 1;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
foreach ($get_data_alumni_all as $gda) {
    if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                                                        $rowCount++; ?>
        <div class="col-sm-<?= $bootstrapColWidth ?>">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-2 ">
                        <img src="<?= base_url('upload/image/profile/' . $gda['foto']); ?>" class="img-fluid" alt="<?= $gda['foto'] ?>" width="200" >
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title text-danger text-uppercase"><strong><?= $gda['nama'] ?></strong></h4>                            
                            <p class="card-text"><span>NISN : </span><?= $gda['nisn']?></p>
                            <p class="card-text"><span>Alamat : </span><?= $gda['alamat']?> <?=$gda['kecamatan']?> <?= $gda['kota']?>,<?= $gda['provinsi']?></p>
                            <p class="card-text"><span>Telepon : </span><?= $gda['telepon']?></p>
                            <a href="" class="btn btn-success btn-sm">Lihat Detil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if ($rowCount % $numOfCols == 0) { ?>
        </div> <?php }
        } ?>