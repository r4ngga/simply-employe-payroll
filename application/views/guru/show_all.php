<div class="main-content-inner">

	<div class="search-box mt-4">
		<form action="" method="POST">
			<input type="text" name="keyword" placeholder="Search..." required>
			<button type="submit" class="btn btn-outline-secondary ti-search"> </button>
		</form>
	</div>

	<?php
	$role_akses =  $this->session->userdata('role');
	if ($role_akses == "admin") {
	?>
		<a href="<?= base_url() ?>admin/addnewteach" class="btn btn-primary mt-4 ">Add New Teacher</a>
	<?php } ?>
	<?= $this->session->flashdata('notify'); ?>
	<div class="row mt-3">

		<div class="col">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">Number</th>
						<th scope="col">Name Teacher</th>
						<th scope="col">Email</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Address</th>
						<th scope="col">Role</th>
						<?php if ($role_akses == "admin") { ?>
							<th scope="col">Action</th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$numberic = 1;
					foreach ($guru as $gr) {
					?>
						<tr>
							<th scope="row"><?= $numberic++; ?></th>
							<td><?= $gr['nama_guru']; ?></td>
							<td><?= $gr['email']; ?></td>
							<td><?= $gr['no_tlp']; ?></td>
							<td><?= $gr['alamat']; ?></td>
							<td><?= $gr['role']; ?></td>
							<?php if ($role_akses == "admin") { ?>
								<td>
									<a href="" class="badge badge-info" data-toggle="modal" data-target="#showDetailTeacher<?= $gr['kd_guru'] ?>">Detail</a>
									<a href="<?= base_url() ?>admin/changeteacher/<?= $gr['kd_guru'] ?>" class="badge badge-warning">Change</a>
									<a href="" class="badge badge-danger" data-toggle="modal" data-target="#deleteTeacher<?= $gr['kd_guru'] ?>">Delete</a>
								</td>
							<?php } ?>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>


	<div class="row">

	</div>

</div>
</div>
<!-- main content area end -->


<!-- Modal -->
<?php
foreach ($guru as $gr) {
?>
	<div class="modal fade" id="showDetailTeacher<?= $gr['kd_guru'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Show Detail Teacher</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<label for="">Code Teacher</label>:
						</div>
						<div class="col"><?= $gr['kd_guru'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Name Teacher</label>:
						</div>
						<div class="col"><?= $gr['nama_guru'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Email</label>:
						</div>
						<div class="col"><?= $gr['email'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Phone Number</label>:
						</div>
						<div class="col"><?= $gr['no_tlp'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Address</label>:
						</div>
						<div class="col"><?= $gr['alamat'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Number Account Bank</label>:
						</div>
						<div class="col"><?= $gr['no_rek'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Default Payment</label>:
						</div>
						<div class="col"><?= $gr['gaji_utama'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Role</label>:
						</div>
						<div class="col"><?= $gr['role'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Sub Role</label>:
						</div>
						<div class="col"><?= $gr['sub_role'] ?></div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php
foreach ($guru as $gr) {
?>
	<div class="modal fade" id="deleteTeacher<?= $gr['kd_guru'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Delete Teacher</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url() ?>admin/teacherdelete_act" method="POST">
					<div class="modal-body">
						<p>Are You Sure Delete <?= $gr['nama_guru'] ?> as Teacher ?? </p>
						<input type="text" id="" name="kd_guru" value="<?= $gr['kd_guru'] ?>" readonly>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Understood</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php } ?>
