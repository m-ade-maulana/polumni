<!-- Page Heading -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>

<div class="row">
    <div class="col-xl-4 col-md-4 mb-4">
        <div class="card border-left-primary shadow-sm h-100 py-2">
            <div class="card-body">
                <div class="row no-gutter">
                    <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
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

    <div class="col-xl-4 col-md-4 mb-4">
        <div class="card border-left-primary shadow-sm h-100 py-2">
            <div class="card-body">
                <div class="row no-gutter">
                    <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                            Alumni Belum Aktif
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $get_data_not_active ?>
                        </div>
                    </div>
                    <div class="col-mr-auto">
                        <i class="fas fa-user-times fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-4 mb-4">
        <div class="card border-left-primary shadow-sm h-100 py-2">
            <div class="card-body">
                <div class="row no-gutter">
                    <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Alumni
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $get_data_all_data ?>
                        </div>
                    </div>
                    <div class="col-mr-auto">
                        <i class="fas fa-users fa-3x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="jumbotron jumbotron-fluid rounded shadow-sm bg-white border-left-primary">
    <div class="container">
        <h1 class="display-4 font-weight-bold">Selamat Datang</h1>
        <p class="lead">Untuk Selalu menjaga silahturahmi SMK Nusantara 1 Kota Tangerang dengan peserta didik yang telah lulus dan untuk meningkatkan kualitas lulusan ke depannya</p>
    </div>
</div>