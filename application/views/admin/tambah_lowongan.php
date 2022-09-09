<!-- Begin Page Content -->
<div class="container-fluid mb-5">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Lowongan Kerja</h1>
	<script>
		<?= $this->session->flashdata('massage'); ?>
	</script>
	<a class="btn btn-primary btn-sm" href="<?= base_url('admin/tambah_pekerjaan') ?>">Tambah Pekerjaan</a>
	<a class="btn btn-success btn-sm" href="<?= base_url('admin/info_lowongan') ?>">Lihat Pekerjaan</a>

	<div class="card mt-4">
		<div class="card-header">
			<h5>Tambah Pekerjaan</h5>
		</div>
		<div class="card-body">
			<form action="<?= base_url('admin/tambahKarir') ?>" method="post">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="nama_pt">Nama PT</label>
							<select class="form-control" name="nama_pt">
								<optgroup label="Pilihan PT">
									<?php
									foreach ($get_perusahaan as $dp) { ?>
										<option value="<?= $dp['nama_perusahaan'] ?>"><?= $dp['nama_perusahaan'] ?></option>
									<?php }
									?>
								</optgroup>

							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="lokasi_pt">Lokasi PT</label>
							<select class="form-control name=" name="alamat_pt">
								<optgroup label="Pilihan Lokasi">
									<?php
									foreach ($get_perusahaan as $dl) { ?>
										<option value="<?= $dl['alamat_perusahaan'] ?>"><?= $dl['alamat_perusahaan'] ?></option>
									<?php }
									?>
								</optgroup>

							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="email_pt">Email</label>
							<input type="email" class="form-control" name="email_pt" id="email_pt">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="lokasi_pt">Telepon</label>
							<input type="number" class="form-control" name="telepon_pt" id="telepon_pt">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="alamat_pt">Alamat</label>
					<textarea class="form-control" name="alamat_pt" id="alamat_pt" cols="30" rows="10"></textarea>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="email_pt">Posisi Lowongan</label>
							<input type="text" class="form-control" name="posisi" id="posisi">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="tanggal">Tanggal Tutup</label>
							<input type="date" class="form-control" name="tanggal_tutup" id="tanggal">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="deskripsi">Deskripsi Pekerjaan</label>
					<textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
				</div>
				<button type="submit" class="btn btn-outline-primary btn-md">Tambah Data</button>
			</form>
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