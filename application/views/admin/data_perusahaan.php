<!-- Begin Page Content -->
<div class="container-fluid mb-5">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Data Perusahaan</h1>
	<script>
		<?= $this->session->flashdata('massage'); ?>
	</script>
	<div class="card mt-4">
		<div class="card-header">
			<h5>Tambah Data</h5>
		</div>
		<div class="card-body">
			<form action="<?= base_url('admin/tambah_pt') ?>" method="post">
				<div class="row">
					<div class="col-sm-3">
						<div class="form-group">
							<input type="text" class="form-control" name="nama_pt" id="" placeholder="Nama PT">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<input type="text" class="form-control" name="alamat_pt" id="" placeholder="Lokasi PT">
						</div>
					</div>
					<div class="col-sm-3">
						<button type="submit" class="btn btn-md btn-primary">Tambah Data</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Show Data -->
	<div class="card mt-4">
		<div class="card-body">
			<table class="table table-stripped display" id="table_perusahaan">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Perusahaan</th>
						<th>Alamat Perusahaan</th>

					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($get_all_perusahaan as $ga) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $ga['nama_perusahaan'] ?></td>
							<td><?= $ga['alamat_perusahaan'] ?></td>
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