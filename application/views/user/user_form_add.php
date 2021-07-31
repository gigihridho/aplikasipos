<!-- Content Wrapper. Contains page content -->
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">User</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active">User</li>
				</ol>
			</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
    </div>

	<!-- Main content -->
	<section class="content">
		<div class="card">
			<div class="card-header">
				<h3 class="box-title">Add Users</h3>
				<div class="float-right">
					<a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
						<i class="fa fa-undo"></i> Back
					</a>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-4 offset-md-4">
						<?php echo validation_errors(); ?>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="name">Name *</label>
								<input type="text" name="fullname" value="<?=set_value('fullname')?>" class="form-control">
							</div>
							<div class="form-group">
								<label for="name">Username *</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label for="name">Password *</label>
								<input type="password" name="password" class="form-control">
							</div>
							<div class="form-group">
								<label for="name">Password Confirmation *</label>
								<input type="password" name="passconf" class="form-control">
							</div>
							<div class="form-group">
								<label for="name">Address</label>
								<textarea type="text" name="address" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label for="name">Level *</label>
								<select name="level" id="" class="form-control">
									<option value="">Pilih</option>
									<option value="1">Admin</option>
									<option value="2">Kasir</option>
								</select>
							</div>
							<div class="form-group">
								<button class="btn btn-success btn-flat" type="submit">
									<i class="fa fa-paper-plane"></i> Save
								</button>
								<button class="btn btn-secondary btn-flat" type="Reset">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
