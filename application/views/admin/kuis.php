<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Kuisioner</h1>
	<script>
		<?= $this->session->flashdata('massage'); ?>
	</script>
	<div class="mt-4">
		<div class="card">
			<div class="card-body">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#tab-1" data-toggle="tab" role="tab" aria-controls="#" aria-selected="true">Data Pribadi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tab-2" data-toggle="tab" role="tab" aria-controls="#" aria-selected="false">Data Perguruan Tinggi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tab-3" data-toggle="tab" role="tab" aria-controls="#" aria-selected="false">Data Pekerjaan</a>
					</li>
				</ul>
				<div class="tab-content mt-4">
					<!-- Tab 1 -->
					<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
						<form action="" method="">
							<div class="form-group row">
								<label for="" class="col-form-label col-sm-2">Question 1</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-2">Question 1</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-2">Question 1</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<button type="submit" class="btn btn-outline-primary btn-sm mt-3">Kirim Jawaban</button>
						</form>
					</div>
					<!-- Tab 2 -->
					<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
						<form action="" method="">
							<div class="form-group row">
								<label for="" class="col-form-label col-sm-2">Question 1</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-2">Question 1</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-2">Question 1</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<button type="submit" class="btn btn-outline-primary btn-sm mt-3">Kirim Jawaban</button>
						</form>
					</div>
					<!-- Tab 3 -->
					<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-2">
						<form action="" method="">
							<div class="form-group row">
								<label for="" class="col-form-label col-sm-2">Question 1</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-2">Question 1</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" placeholder="Your answer ...">
								</div>
							</div>

							<div class="form-group row">
								<label for="" class="col-form-label col-sm-2">Question 1</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" placeholder="Your answer ...">
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