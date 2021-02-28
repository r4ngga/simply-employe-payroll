<div class="main-content-inner">

	<?php
	$role_akses =  $this->session->userdata('role');
	?>
	<div class="row mt-3">
		<?= $this->session->flashdata('notify'); ?>
		<div class="col">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Confirm Your Payment</h5>
				</div>
				<div class="card-body">
					<form action="<?= base_url() ?>guru/confirmpayment_act" method="POST">
						<?php
						if ($konfirmasi == false) {
						?>
							<div class="alert alert-danger" role="alert">
								Your payment not available, or it's not your time to get pay. you can tell your manager.
							</div>
							<?php
						} else {
							foreach ($konfirmasi as $konfirm) {
							?>
								<h5 class="card-title">Code payment : <?= $konfirm['kd_gaji'] ?></h5>
								<p class="card-text">Your Payment : Rp.<?= $konfirm['total_gaji'] ?></p>
								<p class="card-text">Date Payment Send : <?= $konfirm['tgl_terima'] ?></p>
								<div class="form-group">
									<input type="text" class="form-control" id="kodekonfirmasi" name="kd_konfirmasi" value="<?= $konfirm['kd_konfirmasi'] ?>" hidden>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="kodegaji" name="kd_gaji" value="<?= $konfirm['kd_gaji'] ?>" hidden>
								</div>
								<div class="form-group">
									<label for="">Confirmation Payment</label>
									<select id="konfirmcheck" class="form-control" name="status_konfirmasi">
										<option selected><?= $konfirm['status_konfirmasi'] ?></option>
										<option id="diterima" value="sudah diterima">sudah diterima</option>
									</select>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-success">Confirm</button>
								</div>
						<?php }
						} ?>
					</form>
				</div>
			</div>
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
