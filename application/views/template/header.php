<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Wellcome</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url("assets/vendor/fontawesome-free/css/all.css") ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	<!-- Custom styles for this template-->
	<link href="<?= base_url("assets/css/sb-admin-2.min.css") ?>" rel="stylesheet">

	<!-- Tiny MCE -->
	<script src="https://cdn.tiny.cloud/1/ox0yi22djxru5rdz3wy4yjzolta2mlfyvipxdxn8md1gy7gz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<style>
		.bg-gradient-blue {
			background-color: #0093E9;
			background-image: linear-gradient(180deg, #0093E9 0%, #80D0C7 100%);

		}

		.bg-gradient-blue-2 {
			background-color: #0093E9;
			background-image: linear-gradient(104deg, #0093E9 25%, #80D0C7 100%);

		}
	</style>

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-blue sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Polumni</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">
			<?php
			if ($role['role_id'] == 1) { ?>
				<!-- Nav Item - Dashboard -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("dashboard"); ?>">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider">

				<!-- Heading -->
				<div class="sidebar-heading">
					Interface
				</div>

				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						<i class="fas fa-fw fa-users"></i>
						<span>Alumni</span>
					</a>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header">Graduate</h6>
							<a class="collapse-item" href="<?= base_url("alumni"); ?>">Data Alumni</a>
							<a class="collapse-item" href="<?= base_url('alumni/kuis'); ?>">Kuisioner</a>
						</div>
					</div>
				</li>

				<!-- Nav Item - Utilities Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
						<i class="fas fa-fw fa-building"></i>
						<span>Perusahaan</span>
					</a>
					<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
						<div class="bg-white collapse-inner rounded">
							<h6 class="collapse-header">Company</h6>
							<a class="collapse-item" href="<?= base_url("perusahaan"); ?>">Data Perusahaan</a>
							<a class="collapse-item" href="<?= base_url("perusahaan/info_lowongan"); ?>">Informasi Lowongan</a>
						</div>
					</div>
				</li>

			<?php } else if ($role['role_id'] == 2) { ?>
				<!-- Nav Item - Dashboard -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("dashboard/user_dashboard"); ?>">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider">

				<!-- Heading -->
				<div class="sidebar-heading">
					Interface
				</div>

				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("alumni/kuisioner"); ?>">
						<i class="fas fa-fw fa-book"></i>
						<span>Kuisioner</span>
					</a>
				</li>

				<!-- Nav Item - Utilities Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="<?= base_url("perusahaan/info_lowongan"); ?>">
						<i class="fas fa-fw fa-building"></i>
						<span>Informasi Pekerjaan</span>
					</a>
				</li>
			<?php }
			?>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>

						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $username ?></span>
								<img class="img-profile rounded-circle" src="<?= base_url("assets/img/undraw_profile.svg"); ?>">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="<?= base_url("profile"); ?>">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<a class="dropdown-item" href="<?= base_url("settings"); ?>">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Settings
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->
