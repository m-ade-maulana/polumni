<!-- Begin Page Content -->
<div class="container-fluid mb-5">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Data Alumni</h1>

	<!-- Show Data -->
	<div class="card mt-4">
		<div class="card-body">
			<table class="table table-border table-hover table-striped table-responsive-md display" id="table">
				<thead>
					<th>No</th>
					<th>Nama</th>
					<th>NISN</th>
					<th>Tahun Lulus</th>
					<th>Detail</th>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($get_all as $ga) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $ga['nama'] ?></td>
							<td><?= $ga['nisn'] ?></td>
							<td><?= $ga['tanggal_lulus'] ?></td>
							<td>
								<a type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalDetil<?= $ga['id'] ?>">
									Show Profile
								</a>
							</td>
						</tr>
					<?php }
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Your Website 2020</span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Modal -->
<?php
foreach ($get_all as $ga) { ?>
	<div class="modal fade" id="modalDetil<?= $ga['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<?php
						if ($ga['jenis_kelamin'] == 'P') { ?>
							<img class="img-fluid img-circle" src="<?= base_url("assets/img/undraw_profile_1.svg") ?>" width="150" height="150">

						<?php } else if ($ga['jenis_kelamin'] == 'L') { ?>
							<img class="img-fluid img-circle" src="<?= base_url("assets/img/undraw_profile_2.svg") ?>" width="150" height="150">
						<?php }

						?>
						<h3 class=" text-black-50"><?= $ga['nama'] ?></h3>
						<span class="badge badge-primary"><?= $ga['tanggal_lulus'] ?></span>
						<span class="badge badge-danger">Jurusan Keahlian</span>
					</div>
					<hr>
					<p><strong> Alamat Tinggal :</strong><br>
						<?= $ga['alamat'] ?>
					</p>
					<p><strong> Pekerjaan :</strong><br>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae omnis unde recusandae nesciunt et, placeat magni illum dicta. Deserunt, adipisci. Similique mollitia voluptatum veritatis dolore et magnam maxime eius quas?
					</p>
				</div>
			</div>
		</div>
	</div>
<?php }
?>
