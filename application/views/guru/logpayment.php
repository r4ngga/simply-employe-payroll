<div class="main-content-inner">
	<h5 class="mt-2">Log Your Income Payment</h5>
	<?php
	$role_akses =  $this->session->userdata('role');
	?>
	<div class="row mt-3">

		<?= $this->session->flashdata('notify'); ?>
		<div class="col">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Number</th>
						<th scope="col">Code Payment</th>
						<th scope="col">Queue Confirm</th>
						<th scope="col">Date Send</th>
						<th scope="col">Total Payment</th>
						<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if ($konfirmasi == false) {
					?>
						<div class="alert alert-danger" role="alert">
							Your log payment isn't available.
						</div>
						<?php
					} else {
						$numberic = 1;
						foreach ($konfirmasi as $konfirm) {
						?>
							<tr>
								<th scope="row"><?= $numberic++; ?></th>
								<td><?= $konfirm['kd_gaji'] ?></td>
								<td><?= $konfirm['kd_konfirmasi'] ?></td>
								<td><?= $konfirm['tgl_terima'] ?></td>
								<td>Rp.<?= $konfirm['total_gaji'] ?></td>
								<td><?= $konfirm['status_konfirmasi'] ?></td>
							</tr>
					<?php }
					} ?>
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
<script type="text/javascript">
	$(document).ready(function() {
		$(document).on('click', '#konfirmcheck', function() {
			$('#konfirmcheck option:selected').attr('disabled', 'disabled');
			$('#konfirmcheck').val("sudah diterima");
		});
	});
</script>
