<!-- Begin Page Content -->
<div class="container-fluid mb-5">

	<!-- Page Heading -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-current="page">Data Alumni</li>
		</ol>
	</nav>

	<!-- Show Data -->
	<?php
	$col = 1;
	$rowcount = 0;
	$colwidth = 12;
	?>
	<div class="row mt-4">
		<?php
		foreach ($alumni as $a) { ?>
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row no-gutters">
							<div class="col-md-2">
								<?php
								if ($a['foto'] == true) { ?>
									<img src="<?= base_url('upload/image/profile/' . $a['foto']) ?>" class="card-img" alt="" height="200" width="100">
								<?php
								} else { ?>
									<img src="<?= base_url('assets/img/man.png') ?>" class="card-img" alt="" height="200" width="100">
								<?php }
								?>

							</div>
							<div class="col-md-6">
								<div class="card-body">
									<h5 class="card-title"><?= $a['nama'] ?></h5>
									<p class="card-text"><?= $a['alamat'] ?></p>
									<p class="card-text"><?= $a['telepon'] ?></p>
									<a href="#" class="btn btn-success btn-md">Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php
			$rowcount++;
			if ($rowcount % $col == 0) {
				echo '</div><div class="row">';
			}
		}
		?>
	</div>

</div>
<!-- /.container-fluid -->