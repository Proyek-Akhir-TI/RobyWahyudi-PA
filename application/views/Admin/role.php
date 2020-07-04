<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="row">
		<div class="col-lg-6">
			<?php echo form_error('menu', '<div class="alert alert-danger" role="rt">
		
		  ', '</div>'); ?>
			<?php echo $this->session->flashdata('message'); ?>
			<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Tambah Role Baru</a>
			<div class="table-responsive">
				<table class="table table-bordered" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Role</th>
							<th scope="col">Aksi</th>

						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($role as $r) : ?>
							<tr>
								<th scope="row"><?= $no; ?></th>
								<td><?= $r['role']; ?></td>
								<td>
									<a href="<?= base_url('admin/aksesrole/') . $r['id']; ?>" class=" badge badge-success">Akses</a>
									<a href="" class=" badge badge-warning">Edit</a>
									<a href="" class=" badge badge-danger">Hapus</a>
								</td>

							</tr>
							<?php $no++; ?>
						<?php endforeach; ?>


					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRolelModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newRoleModalLabel">Tambah Role Baru</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('admin/role'); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">

						<input type="text" class="form-control" id="role" name="role" placeholder="Tambahkan Role Baru">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
