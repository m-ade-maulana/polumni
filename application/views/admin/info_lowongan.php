<!-- Begin Page Content -->
<div class="container-fluid mb-5">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Data Pekerjaan</h1>
	<?= $this->session->flashdata('massage'); ?>
	<a class="btn btn-primary btn-sm" href="<?= base_url('perusahaan/tambah_pekerjaan') ?>">Tambah Pekerjaan</a>
	<a class="btn btn-success btn-sm" href="<?= base_url('perusahaan/info_lowongan') ?>">Lihat Pekerjaan</a>

	<div class="tab-content">
		<div class="tab-pane fade show active" id="tambah-data" role="tabpanel" aria-labelledby="tambah-data">
			<div class="card mt-4">
				<div class="card-header">
					<h5>Informasi Pekerjaan</h5>
				</div>
				<div class="card-body">
					<table class="table table-border display" id="table_lowongan">
						<thead>
							<th>No</th>
							<th>Nama PT</th>
							<th>Posisi</th>
							<th>Tanggal Tutup</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($data_lowongan as $dl) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $dl['nama_pt'] ?></td>
									<td><?= $dl['posisi'] ?></td>
									<td><?= $dl['tanggal_tutup'] ?></td>
									<td>
										<a href="#" class="btn btn-primary btn-sm">Edit</a>
										<a href="#" class="btn btn-success btn-sm">Hapus</a>
									</td>
								</tr>
							<?php }
							?>

						</tbody>
					</table>
				</div>
			</div>
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
