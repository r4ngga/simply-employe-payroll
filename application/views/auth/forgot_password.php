  <!-- preloader area start -->
  <div id="preloader">
  	<div class="loader"></div>
  </div>
  <!-- preloader area end -->
  <!-- login area start -->
  <div class="login-area login-s2">
  	<div class="container">
  		<div class="login-box ptb--100">
  			<form>
  				<div class="login-form-head">
  					<h4>Forgot Password</h4>
  					<p>Hello there, Sign in and start managing your Admin Template</p>
  					<?= $this->session->flashdata('notify'); ?>
  				</div>
  				<div class="login-form-body">
  					<div class="form-gp">
  						<label for="nputEmail1">Your Email address</label>
  						<input type="email" id="InputEmail1">
  						<i class="ti-email"></i>
  						<div class="text-danger"></div>
  					</div>
  					<div class="form-gp">
  						<label for="InputPassword1">Reset Password</label>
  						<input type="password" id="InputPassword1">
  						<i class="ti-lock"></i>
  						<div class="text-danger"></div>
  					</div>
  					<div class="form-gp">
  						<label for="InputPassword1">Repeat Password</label>
  						<input type="password" id="InputPassword1">
  						<i class="ti-lock"></i>
  						<div class="text-danger"></div>
  					</div>
  					<div class="row mb-4 rmber-area">
  						<div class="col-6">

  						</div>

  					</div>
  					<div class="submit-btn-area">
  						<button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
  					</div>
  					<div class="form-footer text-center mt-5">
  						<p class="text-muted">Don't have an account? <a href="<?= base_url() ?>auth/register">Sign up</a></p>
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
