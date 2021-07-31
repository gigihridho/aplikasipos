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
				<h3 class="box-title">Data Users</h3>
				<div class="float-right">
					<a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat">
						<i class="fa fa-user-plus"></i> Create Users
					</a>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Username</th>
							<th>Name</th>
							<th>Address</th>
							<th>Level</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach($row->result() as $key => $data) { ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$data->username?></td>
							<td><?=$data->name?></td>
							<td><?=$data->address?></td>
							<td><?=$data->level == 1 ? "Admin" : "Kasir"?></td>
							<td class="text-center" width="160px">
								<a href="<?=site_url('user/edit/')?>" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil-alt"></i> Update
								</a>
								<a href="<?=site_url('user/delete')?>" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-alt"></i> Delete
								</a>
							</td>
						</tr>
						<?php
						} ?>
					</tbody>
				</table>
			</div>
			<div class="box-header">
				
			</div>
		</div>
	</section>
