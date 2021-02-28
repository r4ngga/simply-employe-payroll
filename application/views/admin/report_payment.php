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
						<th scope="col">Code Payment</th>
						<th scope="col">Date</th>
						<th scope="col">Name Teacher</th>
						<th scope="col">How Much Attend</th>
						<th scope="col">Total Payment</th>
						<th scope="col">Action</th>

					</tr>
				</thead>
				<tbody>
					<?php
					$numberic = 1;
					foreach ($gaji as $gj) {
					?>
						<tr>
							<th scope="row"><?= $numberic++; ?></th>
							<td><?= $gj['kd_gaji']; ?></td>
							<td><?= $gj['tgl_terima']; ?></td>
							<td><?= $gj['nama_guru']; ?></td>
							<td><?= $gj['banyak_pertemuan']; ?></td>
							<td><?= $gj['total_gaji']; ?></td>
							<td>
								<a href="" class="badge badge-info" data-toggle="modal" data-target="#showDetailPayment<?= $gj['kd_gaji'] ?>">Detail</a>

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
foreach ($gaji as $gj) {
?>
	<div class="modal fade" id="showDetailPayment<?= $gj['kd_gaji'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Show Detail Payment</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<label for="">Code Payment</label>:
						</div>
						<div class="col"><?= $gj['kd_gaji'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Code Teacher</label>:
						</div>
						<div class="col"><?= $gj['kd_guru'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Name Teacher</label>:
						</div>
						<div class="col"><?= $gj['nama_guru'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">How Much Attend</label>:
						</div>
						<div class="col"><?= $gj['banyak_pertemuan'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">How Much Welcoming Newbies</label>:
						</div>
						<div class="col"><?= $gj['wn'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Bonus Welcoming Newbies</label>:
						</div>
						<div class="col"><?= $gj['bonus_wn'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">How Much Placement Test</label>:
						</div>
						<div class="col"><?= $gj['pt'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Bonus Placement Test</label>:
						</div>
						<div class="col"><?= $gj['bonus_pt'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Total Bonus</label>:
						</div>
						<div class="col"><?= $gj['totalbonus'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Total Payment</label>:
						</div>
						<div class="col"><?= $gj['total_gaji'] ?></div>
					</div>
					<div class="row">
						<div class="col">
							<label for="">Total Payment with Bonus</label>:
						</div>
						<div class="col"><?= $gj['total_gajilembur'] ?></div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
