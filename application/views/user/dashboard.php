<!-- Page Heading -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>

<div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow-sm h-100 py-2">
            <div class="card-body">
                <div class="row no-gutter">
                    <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                            Alumni Aktif
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $get_data_active ?>
                        </div>
                    </div>
                    <div class="col-mr-auto">
                        <i class="fas fa-user fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow-sm h-100 py-2">
            <div class="card-body">
                <div class="row no-gutter">
                    <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                            Alumni Belum Aktif
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $get_data_not_active ?>
                        </div>
                    </div>
                    <div class="col-mr-auto">
                        <i class="fas fa-user fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow-sm h-100 py-2">
            <div class="card-body">
                <div class="row no-gutter">
                    <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                            Jumlah Alumni
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $get_data_all_data ?>
                        </div>
                    </div>
                    <div class="col-mr-auto">
                        <i class="fas fa-user fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="jumbotron jumbotron-fluid rounded shadow-sm bg-white border-left-warning">
    <div class="container">
        <h1 class="display-4">Selamat Datang</h1>
        <p class="lead">Ini merupakan portal untuk para alumni SMK Nusantara 1 dari angkatan pertama sampai saat ini</p>
    </div>
</div>