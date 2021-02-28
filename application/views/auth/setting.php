<?php
$role_akses =  $this->session->userdata('role');
?>
<div class="main-content-inner">

	<div class="row justify-content-md-center mt-3">

		<div class="col-md-6">
			<?= $this->session->flashdata('notify'); ?>
			<form <?php
					if ($role_akses == "admin") {
					?> action="<?= base_url() ?>admin/setting_act" <?php } else { ?> action="<?= base_url() ?>guru/settingaccount_act" <?php	}
																																		?> method="POST">

				<?php
				foreach ($guru as $gr) {
				?>
					<div class="form-gp" hidden>
						<label for="exampleInputCode">Code Teacher</label>
						<input type="text" id="exampletName1" name="kd_guru" value="<?= $gr['kd_guru'] ?>" readonly>
						<i class="ti-crown"></i>
						<div class="text-danger"></div>
					</div>
					<div class="form-gp">
						<label for="exampleInputName">Full Name</label>
						<input type="text" id="exampletName1" name="nama_guru" value="<?= $gr['nama_guru'] ?>">
						<i class="ti-user"></i>
						<div class="text-danger"></div>
					</div>
					<div class="form-gp">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" id="exampleEmail1" name="email" value="<?= $gr['email'] ?>">
						<i class="ti-email"></i>
						<div class="text-danger"></div>
					</div>
					<div class="form-gp">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" id="exampleInputPassword1" name="password">
						<i class="ti-lock"></i>
						<div class="text-danger"></div>
					</div>
					<div class="form-gp">
						<label for="exampleInputPassword2">Confirm Password</label>
						<input type="password" id="exampleInputPassword2" name="password1">
						<i class="ti-lock"></i>
						<div class="text-danger"></div>
					</div>
					<div class="form-gp">
						<label for="exampleInputphonenumber">Phone Number</label>
						<input type="text" id="notlp" name="no_tlp" value="<?= $gr['no_tlp'] ?>">
						<i class="ti-mobile"></i>
						<div class="text-danger"></div>
					</div>
					<div class="form-gp">
						<label for="exampleadress">Address</label>
						<input type="text" id="alamatnya" name="alamat" value="<?= $gr['alamat'] ?>">
						<i class="ti-map-alt"></i>
						<div class="text-danger"></div>
					</div>
					<div class="form-gp">
						<label for="exampleInputAccBank">Number Account Bank</label>
						<input type="text" id="norek" name="no_rek" value="<?= $gr['no_rek'] ?>">
						<i class="ti-map-alt"></i>
						<div class="text-danger"></div>
					</div>

					<div class="form-gp">
						<button type="submit" class="btn btn-primary">Save Change</button>
					</div>
				<?php } ?>
			</form>
		</div>
	</div>


	<div class="row">

	</div>


</div>
</div>
<!-- main content area end -->
