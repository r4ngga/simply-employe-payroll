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
						<th scope="col">Number Confirmation</th>
						<th scope="col">Code Payment</th>
						<th scope="col">Code Teacher</th>
						<th scope="col">Name Teacher</th>
						<th scope="col">Role</th>
						<th scope="col">Sub Role</th>
						<th scope="col">Status Confirmation</th>

					</tr>
				</thead>
				<tbody>
					<?php
					$numberic = 1;
					foreach ($gaji as $gj) {
					?>
						<tr>
							<th scope="row"><?= $numberic++; ?></th>
							<td><?= $gj['kd_konfirmasi']; ?></td>
							<td><?= $gj['kd_gaji']; ?></td>
							<td><?= $gj['kd_guru']; ?></td>
							<td><?= $gj['nama_guru']; ?></td>
							<td><?= $gj['role']; ?></td>
							<td><?= $gj['sub_role']; ?></td>
							<td><?= $gj['status_konfirmasi']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
</div>
<!-- main content area end -->
