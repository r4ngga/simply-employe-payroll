<div class="main-content-inner">

	<div class="row justify-content-md-center mt-3">

		<div class="col-md-6">
			<?= $this->session->flashdata('notify'); ?>
			<form action="" method="POST">

				<div class="form-gp" hidden>
					<label for="exampleInputCode">Code Teacher</label>
					<input type="text" id="exampletName1" name="kd_guru" value="<?= $rand_string ?>" readonly>
					<i class="ti-crown"></i>
					<div class="text-danger"></div>
				</div>
				<div class="form-gp">
					<label for="exampleInputName">Full Name</label>
					<input type="text" id="exampletName1" name="nama_guru" value="">
					<i class="ti-user"></i>
					<div class="text-danger"></div>
				</div>
				<div class="form-gp">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" id="exampleEmail1" name="email" value="">
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
					<input type="text" id="notlp" name="no_tlp" value="">
					<i class="ti-mobile"></i>
					<div class="text-danger"></div>
				</div>
				<div class="form-gp">
					<label for="exampleadress">Address</label>
					<input type="text" id="alamatnya" name="alamat" value="">
					<i class="ti-map-alt"></i>
					<div class="text-danger"></div>
				</div>
				<div class="form-gp">
					<label for="exampleInputAccBank">Number Account Bank</label>
					<input type="text" id="norek" name="no_rek" value="">
					<i class="ti-map-alt"></i>
					<div class="text-danger"></div>
				</div>
				<div class="form-gp">
					<label for="exampleInputPayment">Default Payment</label>
					<input type="text" id="gaji" name="gaji_utama" value="">
					<i class="ti-map-alt"></i>
					<div class="text-danger"></div>
				</div>
				<div class="form-gp">
					<label for="examplerole">Role</label>
					<input type="text" id="role" name="role" value="">
					<i class="ti-map-alt"></i>
					<div class="text-danger"></div>
				</div>
				<div class="form-gp">
					<label for="exampleInputsubrole">Sub Role</label>
					<input type="text" id="subrole" name="subrole" value="">
					<i class="ti-map-alt"></i>
					<div class="text-danger"></div>
				</div>
				<div class="form-gp">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>

</div>
</div>
<!-- main content area end -->
