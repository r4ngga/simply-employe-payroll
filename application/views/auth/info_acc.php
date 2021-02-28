<div class="main-content-inner">

	<div class="row justify-content-md-center mt-3">

		<div class="col-md-6">
			<?= $this->session->flashdata('notify'); ?>
			<div class="card">
				<?php
				$role_akses =  $this->session->userdata('role');
				if ($role_akses == "admin") {
				?>
					<a href="<?= base_url() ?>admin/settingaccount_admin/<?= $user['kd_guru'] ?>" class="btn btn-primary mt-4 mb-2">Change Setting Account</a>
				<?php
				} else {
				?>
					<a href="<?= base_url() ?>guru/settingaccount/<?= $user['kd_guru'] ?>" class="btn btn-primary mt-4 mb-2">Change Setting Account</a>
				<?php
				}
				foreach ($guru as $gr) {
				?>

					<h5 class="card-header">Your Account Information</h5>
					<div class="card-body">
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
				<?php } ?>
			</div>
		</div>
	</div>


	<div class="row">

	</div>

</div>
</div>
<!-- main content area end -->
