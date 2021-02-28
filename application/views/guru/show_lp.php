<div class="main-content-inner">

	<div class="search-box mt-4">
		<form action="" method="POST">
			<input type="text" name="keyword" placeholder="Search..." required>
			<button type="submit" class="btn btn-outline-secondary ti-search"> </button>
		</form>
	</div>

	<?php
	$role_akses =  $this->session->userdata('role');
	?>
	<?= $this->session->flashdata('notify'); ?>
	<div class="row mt-3">

		<div class="col">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">Number</th>
						<th scope="col">Name Teacher</th>
						<th scope="col">Subjects</th>
						<th scope="col">Description</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$numberic = 1;
					foreach ($gurudet as $gr) {
					?>
						<tr>
							<th scope="row"><?= $numberic++; ?></th>
							<td><?= $gr['nama_guru']; ?></td>
							<td><?= $gr['mapel']; ?></td>
							<td><?= $gr['background']; ?></td>
							<td>
								<a href="<?= base_url() ?>admin/changeteacherlandingpage/<?= $gr['guru_det'] ?>" class="badge badge-warning">Change</a>
								<a href="" class="badge badge-danger" data-toggle="modal" data-target="#deleteShowLandingPage<?= $gr['guru_det'] ?>">Delete</a>
							</td>
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
foreach ($gurudet as $gr) {
?>
	<div class="modal fade" id="deleteShowLandingPage<?= $gr['guru_det'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Delete Staff From Landing Page</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url() ?>admin/deleteteacherlp" method="POST">
					<div class="modal-body">
						<p>Are You Sure Delete Information <?= $gr['nama_guru'] ?> from Landing Page home ?? </p>
						<input type="text" id="" name="guru_det" value="<?= $gr['guru_det'] ?>" hidden>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php } ?>
