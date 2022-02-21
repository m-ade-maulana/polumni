<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="<?= base_url("logout") ?>">Logout</a>
			</div>
		</div>
	</div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- <script src="assets/vendor/jquery/jquery.min.js"></script> -->
<script src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
<script src="<?= base_url("assets/jquery-easing/jquery.easing.min.js") ?>"></script>

<!-- Chart JS -->
<script src="<?= base_url("assets/vendor/chart.js/Chart.min.js") ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url("assets/js/sb-admin-2.min.js") ?>"></script>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script type='text/javascript'>
	$(document).ready(function() {
		$("#bekerja").change(function() {
			$("#tidak_bekerja").prop("checked", false);
			$("#kuliah").prop("checked", false);
		});

		$("#tidak_bekerja").change(function() {
			$("#bekerja").prop("checked", false);
			$("#kuliah").prop("checked", false);
		});

		$("#kuliah").change(function() {
			$("#bekerja").prop("checked", false);
			$("#tidak_bekerja").prop("checked", false);
		});

		$("#ya").change(function() {
			$("#tidak").prop("checked", false);
		});

		$("#tidak").change(function() {
			$("#ya").prop("checked", false);
		});

		$("#masih").change(function() {
			$("#sudah_lulus").prop("checked", false);
		});

		$("#sudah_lulus").change(function() {
			$("#masih").prop("checked", false);
		});

		$("#masih_usaha").change(function() {
			$("#sudah_tidak_usaha").prop("checked", false);
		});

		$("#sudah_tidak_usaha").change(function() {
			$("#masih_usaha").prop("checked", false);
		});
	});

	$(document).ready(function() {
		$('#table').DataTable();
	});

	$(document).ready(function() {
		$('#table_perusahaan').DataTable();
	});

	$(document).ready(function() {
		$('#table_lowongan').DataTable();
	});

	// TinyMCE
	tinymce.init({
		selector: 'textarea',
		plugins: 'advlist autolink lists link image charmap preview hr anchor pagebreak',
		menubar: 'custom',
		menu: {
			custom: {
				title: 'Custom menu',
				items: 'basicitem nesteditem toggleitem'
			}
		}
	});




	// Bar Chart Example
	// var ctx = document.getElementById("myChart").getContext('2d');
	// var myBarChart = new Chart(ctx, {
	// 	type: 'line',
	// 	data: {
	// 		labels: ["2020"],
	// 		datasets: [{
	// 			label: 'Grafik',
	// 			backgroundColor: "#4e73df",
	// 			hoverBackgroundColor: "#2e59d9",
	// 			borderColor: "#4e73df",
	// 			data: [50],
	// 		}],
	// 	},
	// 	options: {
	// 		responsive: true,
	// 		maintainAspectRatio: false,
	// 		scales: {
	// 			yAxes: [{
	// 				ticks: {
	// 					beginAtZero: true
	// 				}
	// 			}]
	// 		}
	// 	}
	// });
</script>
</body>

</html>
