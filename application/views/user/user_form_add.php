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
						<?php //echo validation_errors() ?>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="form-group <?=form_error('fullname') ? 'is-invalid' : null?>">
								<label for="name">Name *</label>
								<input type="text" name="fullname" value="<?=set_value('fullname')?>"  class="form-control <?= form_error('fullname') ? 'is-invalid' : null ?>">
								<?= form_error('fullname') ?>
							</div>
							<div class="form-group <?=form_error('username') ? 'is-invalid' : null?>">
								<label for="name">Username *</label>
								<input type="text" name="username" value="<?=set_value('username')?>" class="form-control <?= form_error('fullname') ? 'is-invalid' : null ?>">
								<?= form_error('username') ?>
							</div>
							<div class="form-group <?=form_error('password') ? 'is-invalid' : null?>">
								<label for="name">Password *</label>
								<input type="password" name="password" value="<?=set_value('password')?>" class="form-control <?= form_error('fullname') ? 'is-invalid' : null ?>">
								<?= form_error('password') ?>
							</div>
							<div class="form-group <?=form_error('passconf') ? 'is-invalid' : null?>">
								<label for="name">Password Confirmation *</label>
								<input type="password" name="passconf" value="<?=set_value('passconf')?>" class="form-control <?= form_error('fullname') ? 'is-invalid' : null ?>">
								<?= form_error('passconf') ?>
							</div>
							<div class="form-group">
								<label for="name">Address</label>
								<textarea type="text" name="address" value="<?=set_value('address')?>" class="form-control"></textarea>
								<?= form_error('address') ?>
							</div>
							<div class="form-group <?=form_error('level') ? 'is-invalid' : null?>">
								<label for="name">Level *</label>
								<select name="level" id="" class="form-control <?= form_error('fullname') ? 'is-invalid' : null ?>">
									<option value="">Pilih</option>
									<option value="1" value="<?=set_value('level') == 1 ? "selected" : null?>">Admin</option>
									<option value="2" value="<?=set_value('level') == 2 ? "selected" : null?>">Kasir</option>
								</select>
								<?= form_error('level') ?>
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
