</div>

<!-- /.container-fluid -->



</div>

<!-- End of Main Content -->



<!-- Footer -->

<footer class="sticky-footer bg-white">

    <div class="container my-auto">

        <div class="copyright text-center my-auto">

            <span>Copyright &copy; Portal Alumni SMK Nusantara 1 Tangerang 2021</span>

        </div>

    </div>

</footer>

<!-- End of Footer -->



</div>

<!-- End of Content Wrapper -->



</div>

<!-- End of Page Wrapper -->



<!-- Scroll to Top Button-->

<a class="scroll-to-top rounded" href="#page-top">

    <i class="fas fa-angle-up"></i>

</a>



<!-- Bootstrap core JavaScript-->

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>

<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>



<!-- Core plugin JavaScript-->

<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>



<!-- Custom scripts for all pages-->

<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>



<!-- Page level plugins -->

<scrip t src="<?= base_url('assets/vendor/chart.js/Chart.min.js') ?>"></scrip>



<!-- Page level custom scripts -->

<script src="<?= base_url('assets/js/demo/chart-area-demo.js') ?>"></script>

<script src="<?= base_url('assets/js/demo/chart-pie-demo.js') ?>"></script>



<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.js') ?>"></script>

<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.js') ?>"></script>



<!-- Page level plugins -->

<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>

<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>



<script type="text/javascript">
    $(document).ready(function() {

        $('#table').DataTable();

    });



    $(document).ready(function() {

        // var groupColumn = 2;

        $('#dataTable').DataTable({

            pageLength: 5,

            lengthMenu: [

                [5, 10, 20, -1],

                [5, 10, 20, 'Todos']

            ]

        });

    });



    $(document).ready(function() {

        $('#table-pekerjaan').DataTable();

    });

    $(document).ready(function() {
        $('#table_data_join').DataTable();
    })



    function valueChanged() {

        if ($('#cek').is(":checked")) {

            $("#tahunLulus").hide();

        } else {

            $("#tahunLulus").show();

        }

    }



    function valueJob() {

        if ($('#check').is(":checked")) {

            $("#tahunkeluar").hide();

        } else {

            $("#tahunkeluar").show();

        }

    }
</script>



</body>



</html>