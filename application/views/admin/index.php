<div class="main-content-inner">
	<?= $this->session->flashdata('notify'); ?>
	<div class="row mt-3">
		<div class="col">
			<div class="card bg-light border-info" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title"><?= $user['nama_guru'] ?></h5>
					<h6 class="card-subtitle mb-2 text-muted">Role : <?= $user['role'] ?></h6>
					<p class="card-text">Phone Number : <?= $user['no_tlp'] ?>.</p>
					<p class="card-text">Address : <?= $user['alamat'] ?>.</p>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- main content area end -->
