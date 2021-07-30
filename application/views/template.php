<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Blank Page</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="index3.html" class="nav-link">Home</a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="#" class="nav-link">Contact</a>
		</li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
	<li class="nav-item">
	<a class="nav-link" data-widget="fullscreen" href="#" role="button">
		<i class="fas fa-expand-arrows-alt"></i>
	</a>
	</li>
	<li class="dropdown user user-menu mt-2">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image">
			<span class="hidden-xs">Admin</span>
		</a>
		<ul class="dropdown-menu">
			<li class="user-header">
				<img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle">
				<p>Administrator
					<small>Indonesia</small>
				</p>
			</li>
			<li class="user-footer">
				<div class="pull-left">
					<a href="#" class="btn btn-default btn-flat">Profile</a>
				</div>
				<div class="pull-right">
					<a href="<?=site_url('auth/logout')?>" class="btn btn-flat bg-red">Sign out</a>
				</div>
			</li>
		</ul>
	</li>
    </ul>
	</nav>
	<!-- /.navbar -->

<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="index3.html" class="brand-link">
			<img src="<?=base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
			<span class="brand-text font-weight-light">Aplikasi POS</span>
		</a>
		<!-- Sidebar -->
		<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
			<img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
			<a href="#" class="d-block">Alexander Pierce</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
			<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
			<div class="input-group-append">
				<button class="btn btn-sidebar">
				<i class="fas fa-search fa-fw"></i>
				</button>
			</div>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
				with font-awesome or any other icon font library -->
			<li class="nav-header">Main Navigation</li>
			<li class="nav-item">
				<a href="../widgets.html" class="nav-link">
				<i class="nav-icon fa fa-tachometer-alt"></i>
				<p>
					Dashboard
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="../widgets.html" class="nav-link">
				<i class="nav-icon fas fa-truck"></i>
				<p>
					Suppliers
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="../widgets.html" class="nav-link">
				<i class="nav-icon fas fa-users"></i>
				<p>
					Customers
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
				<i class="nav-icon fas fa-archive"></i>
				<p>
					Products
					<i class="fas fa-angle-left right"></i>
				</p>
				</a>
				<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../UI/general.html" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Categories</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../UI/icons.html" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Units</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../UI/buttons.html" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Items</p>
					</a>
				</li>
				</ul>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
				<i class="nav-icon fas fa-shopping-cart"></i>
				<p>
					Transactions
					<i class="fas fa-angle-left right"></i>
				</p>
				</a>
				<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../forms/general.html" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Sales</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../forms/advanced.html" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Stock In</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../forms/editors.html" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Stock Out</p>
					</a>
				</li>
				</ul>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
				<i class="nav-icon fas fa-chart-pie"></i>
				<p>
					Reports
					<i class="fas fa-angle-left right"></i>
				</p>
				</a>
				<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../forms/general.html" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Sales</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../forms/advanced.html" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Stock </p>
					</a>
				</li>
				</ul>
			</li>
			<?php if($this->session->userdata('level') == 1) { ?>
			<li class="nav-header">Settings</li>
			<li class="nav-item">
				<a href="https://adminlte.io/docs/3.1/" class="nav-link">
				<i class="nav-icon fas fa-user"></i>
				<p>User</p>
				</a>
			</li>
			<?php } ?>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<?php echo $contents ?>
	</div>
	<!-- /.content-wrapper -->

	<footer class="main-footer">
		<div class="float-right d-none d-sm-block">
		<b>Version</b> 3.1.0
		</div>
		<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
	</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
</body>
</html>
