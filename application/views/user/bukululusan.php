<!-- Page Heading -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Buku Kelulusan</li>
    </ol>
</nav>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Data Lulusan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $numOfCols = 1;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
            foreach ($get_data_alumni_all as $gda) { ?>
                <tr>
                    <td>
                        <?php if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                                                                                    $rowCount++; ?>
                            <div class="col-sm-<?= $bootstrapColWidth ?>">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-body">
                                                <img src="<?= base_url('upload/image/profile/' . $gda['foto']); ?>" class="img-thumbnail" alt="<?= $gda['foto'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text d-none"><span>Tahun lulus : </span><?= $gda['tahun_lulusan'] ?></p>
                                                <h4 class="card-title text-danger text-uppercase"><strong><?= $gda['nama'] ?></strong></h4>
                                                <p class="card-text"><span>NISN : </span><?= $gda['nisn'] ?></p>
                                                <p class="card-text"><span>Alamat : </span><?= $gda['alamat'] ?></p>
                                                <p class="card-text"><span>Telepon : </span><?= $gda['telepon'] ?></p>
                                                <button type="button" class="btn btn-success btn-sm" data-target="#detil_<?= $gda['id_account'] ?>" data-toggle="modal">Lihat Detil</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
                <?php
                if ($rowCount % $numOfCols == 0) { ?>
</div> <?php }
            } ?>

</tbody>
</table>

</div>
<?php
foreach ($get_data_alumni_all as $gdal) { ?>
    # code...
    <div class="modal fade" id="detil_<?= $gdal['id_account'] ?>" tabindex="-1" aria-labelledby="detilModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profile</h5>
                </div>
                <div class="modal-body">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <div class="card-body">
                                    <img src="<?= base_url('upload/image/profile/' . $gdal['foto']); ?>" class="img-thumbnail" alt="<?= $gda['foto'] ?>">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text d-none"><span>Tahun lulus : </span><?= $gdal['tahun_lulusan'] ?></p>
                                    <h4 class="card-title text-danger text-uppercase"><strong><?= $gdal['nama'] ?></strong></h4>
                                    <p class="card-text"><span>NISN : </span><?= $gdal['nisn'] ?></p>
                                    <p class="card-text"><span>Tempat Tanggal Lahir : </span><?= $gdal['tempat_lahir'] . ', ' . $gdal['tanggal_lahir'] ?></p>
                                    <p class="card-text"><span>Agama : </span><?= $gdal['agama'] ?></p>
                                    <p class="card-text"><span>Telepon : </span><?= $gdal['telepon'] ?></p>
                                    <p class="card-text"><span>Alamat : </span><?= $gdal['alamat'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }
?>