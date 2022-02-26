<!-- Begin Page Content -->
<!-- Page Heading -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Activate Account</li>
    </ol>
</nav>

<ul class="nav nav-pills" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="not-active-tab" data-toggle="tab" href="#not-active" role="tab" aria-controls="not-active" aria-selected="true">Not Active</a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="#active" class="nav-link" id="active-tab" data-toggle="tab" href="#active" role="tab" aria-controls="active" aria-selected="false">Active</a>
    </li>
</ul> <br>
<div class="card">
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active table-responsive" id="not-active" role="tabpanel" aria-labelledby="not-active-tab">
                <table class="table table-bordered" id="table-tab" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($registered as $r) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $r['nama'] ?></td>
                                <td><?= $r['username'] ?></td>
                                <td><?= $r['email'] ?></td>
                                <td>
                                    <a href="#" class="badge badge-primary">Activate</a>
                                    <a href="#" class="badge badge-secondary">View</a>
                                </td>
                            </tr>
                        <?php }
                        ?>

                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade" id="active" role="tabpanel" aria-labelledby="active-tab">
                <table class="table table-responsive-sm table-striped table-bordered" id="table-tab-2" width="100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Tahun Lulus</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Adi</td>
                            <td>ademaul</td>
                            <td>ademaulana464@gmail.com</td>
                            <td>2018</td>
                            <td>
                                <a href="#" class="badge badge-primary">Activate</a>
                                <a href="#" class="badge badge-secondary">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>