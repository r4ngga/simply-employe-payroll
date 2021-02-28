   <!-- preloader area start -->
   <div id="preloader">
   	<div class="loader"></div>
   </div>
   <!-- preloader area end -->
   <!-- login area start -->
   <div class="login-area login-s2">
   	<div class="container">
   		<div class="login-box ptb--100">
   			<form method="POST" action="<?= base_url() ?>auth/register_action">
   				<div class="login-form-head">
   					<h4>Sign up</h4>
   					<p>Hello there, Sign up and Join with Us</p>
   					<?= $this->session->flashdata('notify'); ?>
   				</div>
   				<div class="login-form-body">
   					<div class="form-gp" hidden>
   						<label for="exampleInputName1">Code Teacher</label>
   						<input type="text" id="exampletName1" name="kd_guru" value="<?= $rand_string ?>">
   						<i class="ti-crown"></i>
   						<div class="text-danger"></div>
   					</div>
   					<div class="form-gp">
   						<label for="exampleInputName1">Full Name</label>
   						<input type="text" id="exampletName1" name="nama_guru">
   						<i class="ti-user"></i>
   						<div class="text-danger"></div>
   					</div>
   					<div class="form-gp">
   						<label for="exampleInputEmail1">Email address</label>
   						<input type="email" id="exampleEmail1" name="email">
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
   						<label for="exampleInputEmail1">Phone Number</label>
   						<input type="text" id="notlp" name="no_tlp">
   						<i class="ti-mobile"></i>
   						<div class="text-danger"></div>
   					</div>
   					<div class="form-gp">
   						<label for="exampleInputEmail1">Address</label>
   						<input type="text" id="alamatnya" name="alamat">
   						<i class="ti-map-alt"></i>
   						<div class="text-danger"></div>
   					</div>
   					<div class="submit-btn-area">
   						<button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
   						<div class="login-other row mt-4">

   						</div>
   					</div>
   					<div class="form-footer text-center mt-5">
   						<p class="text-muted">Have an account? <a href="<?= base_url() ?>auth/login">Sign in</a></p>
   					</div>
   					<div class="form-footer text-center mt-5">
   						<p class="text-muted">Back to Landing Page <a href="<?= base_url() ?>auth">Home</a></p>
   					</div>
   				</div>
   			</form>
   		</div>
   	</div>
   </div>
   <!-- login area end -->
