<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Kuisioner</h1>
	<?= $this->session->flashdata('massage'); ?>
	<div class="mt-4">
		<div class="card">
			<div class="card-body">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#tab-1" data-toggle="tab" role="tab" aria-controls="#" aria-selected="true">Data Pribadi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tab-2" data-toggle="tab" role="tab" aria-controls="#" aria-selected="false">Data Pekerjaan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tab-3" data-toggle="tab" role="tab" aria-controls="#" aria-selected="false">Data Perguruan Tinggi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tab-4" data-toggle="tab" role="tab" aria-controls="#" aria-selected="false">Data Wirausaha</a>
					</li>
				</ul>
				<div class="tab-content mt-4">
					<!-- Tab 1 -->
					<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
						<form action="<?= base_url('alumni/kuis_data_pribadi') ?>" method="post">
							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Nama Lengkap</label>
								<div class="col-sm-6">
									<input type="text" name="nama" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Lulusan Tahun</label>
								<div class="col-sm-6">
									<input type="date" name="tahun_lulus" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Kompetensi Keahlian</label>
								<div class="col-sm-6">
									<select name="kompetensi" id="" class="form-control">
										<option>Pilih Jurusan</option>
										<optgroup label="Jurusan">
											<option value="AKL">AKL</option>
											<option value="OTKP">OTKP</option>
											<option value="MM">MM</option>
											<option value="DKV">DKV</option>
											<option value="PSPT">PSPT</option>
											<option value="TKJ">TKJ</option>
											<option value="RPL">RPL</option>
										</optgroup>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Alamat Sekarang</label>
								<div class="col-sm-6">
									<textarea name="alamat" id="textarea" cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">No. HP</label>
								<div class="col-sm-6">
									<input type="number" name="nohp" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Email</label>
								<div class="col-sm-6">
									<input type="email" name="email" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Instagram</label>
								<div class="col-sm-6">
									<input type="text" name="instagram" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Setelah Lulus / Saat ini
								</label>
								<div class="col-sm-6">
									<input type="radio" name="bekerja" id="bekerja" value="Bekerja"> Bekerja <br>
									<input type="radio" name="belum_bekerja" id="tidak_bekerja" value="Tidak Bekerja"> Belum Bekerja <br>
									<input type="radio" name="kuliah" id="kuliah" value="Kuliah"> Kuliah
								</div>
							</div>

							<button type="submit" class="btn btn-outline-primary btn-sm mt-3">Kirim Jawaban</button>
						</form>
					</div>
					<!-- Tab 2 -->
					<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
						<form action="<?= base_url('alumni/kuis_data_pekerjaan') ?>" method="post">
							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Nama Perusahaan</label>
								<div class="col-sm-6">
									<input type="text" name="nama_pt" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Alamat Perusahaan</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="alamat_pt" id="textarea" cols="30" rows="10"></textarea>
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Nomor Telp Perusahaan
								</label>
								<div class="col-sm-6">
									<input type="number" name="no_telp_pt" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Sektor Perusahaan
								</label>
								<div class="col-sm-6">
									<select name="sektor" id="" class="form-control">
										<option>Pilih Sektor</option>
										<optgroup label=" Sektor Perusahaan">
											<option value="Industri">Industri</option>
											<option value="Retail">Retail</option>
											<option value="Financial">Financial</option>
											<option value="Lainnya">Lainnya</option>
										</optgroup>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Tanggal Masuk Kerja
								</label>
								<div class="col-sm-6">
									<input type="date" name="tanggal_masuk" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Penghasilan
								</label>
								<div class="col-sm-6">
									<input type="text" name="penghasilan" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Masih Bekerja
								</label>
								<div class="col-sm-6">
									<input type="radio" name="masih_bekerja" id="ya" value="Ya"> Ya <br>
									<input type="radio" name="tidak_bekerja" id="tidak" value="Tidak"> Tidak
								</div>
							</div>

							<button type="submit" class="btn btn-outline-primary btn-sm mt-3">Kirim Jawaban</button>
						</form>
					</div>
					<!-- Tab 3 -->
					<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-2">
						<form action="<?= base_url('alumni/kuis_data_kampus') ?>" method="post">
							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Nama Perguruan Tinggi
								</label>
								<div class="col-sm-6">
									<input type="text" name="nama_kampus" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Alamat Perguruan Tinggi
								</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="alamat_kampus" id="textarea" cols="30" rows="10"></textarea>
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Fakultas</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="fakultas" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Jurusan / Prodi</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="jurusan" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Jenjang</label>
								<div class="col-sm-6">
									<select name="jenjang" id="" class="form-control">
										<option>Pilih Sektor</option>
										<optgroup label="Jenjang">
											<option value="S3">S3</option>
											<option value="S2">S2</option>
											<option value="S1">S1</option>
											<option value="D4">D4</option>
											<option value="D3">D3</option>
										</optgroup>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Tanggal Masuk Kuliah</label>
								<div class="col-sm-6">
									<input type="date" name="tanggal_masuk" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Masih Kuliah</label>
								<div class="col-sm-6">
									<input type="radio" name="kuliah" id="masih" value="Ya"> Ya <br>
									<input type="radio" name="sudah_lulus" id="sudah_lulus" value="Sudah Lulus"> Sudah Lulus
								</div>
							</div>

							<button type="submit" class="btn btn-outline-primary btn-sm mt-3">Kirim Jawaban</button>
						</form>
					</div>

					<!-- Kuis 4 -->
					<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-2">
						<form action="<?= base_url('alumni/kuis_data_usaha') ?>" method="post">
							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Nama Usaha</label>
								<div class="col-sm-6">
									<input type="text" name="nama_usaha" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Alamat Usaha</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="alamat_usaha" id="textarea" cols="30" rows="10"></textarea>
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Nomor telepon</label>
								<div class="col-sm-6">
									<input type="number" name="no_telp_usaha" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Bidang usaha</label>
								<div class="col-sm-6">
									<input type="text" name="bidang_usaha" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Sumber modal</label>
								<div class="col-sm-6">
									<select name="sumber_modal" id="" class="form-control">
										<option>Pilih Jenis Modal</option>
										<optgroup label="Sumber modal">
											<option value="Modal Pemerintah">Modal Pemerintah</option>
											<option value="Modal Sendiri">Modal Sendiri</option>
										</optgroup>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Jumlah Modal</label>
								<div class="col-sm-6">
									<input type="text" name="jumlah_modal" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Jumlah Karyawan</label>
								<div class="col-sm-6">
									<input type="text" name="jumlah_karyawan" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Tanggal buka usaha</label>
								<div class="col-sm-6">
									<input type="date" name="tanggal_buka_usaha" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Penghasilan</label>
								<div class="col-sm-6">
									<input type="text" name="penghasilan_usaha" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-4">Masih berwirausaha</label>
								<div class="col-sm-6">
									<input type="radio" name="masih_usaha" id="masih_usaha" value="Masih Usaha"> Ya <br>
									<input type="radio" name="sudah_tidak_usaha" id="sudah_tidak_usaha" value="Sudah Tidak Usaha"> Tidak
								</div>
							</div>

							<button type="submit" class="btn btn-outline-primary btn-sm mt-3">Kirim Jawaban</button>
						</form>
					</div>
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
