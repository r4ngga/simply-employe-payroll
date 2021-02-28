<body>
	<!-- preloader area start -->
	<div id="preloader">
		<div class="loader"></div>
	</div>
	<!-- preloader area end -->
	<!-- page container area start -->
	<div class="page-container">
		<!-- sidebar menu area start -->
		<div class="sidebar-menu">
			<div class="sidebar-header">
				<div class="logo">
					<a href="#"><img src="<?= base_url() ?>assets/images/android-icon-72x72.png" alt="logo"></a>
				</div>
			</div>
			<div class="main-menu">
				<div class="menu-inner">
					<nav>
						<ul class="metismenu" id="menu">
							<?php
							$role_akses =  $this->session->userdata('role');
							if ($role_akses == "admin") {
							?>
								<li>
									<a href="<?= base_url() ?>admin" aria-expanded="true"><i class="ti-home"></i><span>Dashboard</span></a>
								</li>
							<?php
							} else {
							?>
								<li>
									<a href="<?= base_url() ?>guru" aria-expanded="true"><i class="ti-home"></i><span>Dashboard</span></a>
								</li>
							<?php
							}
							?>
							<?php

							if ($role_akses == "admin") {
							?>
								<li>
									<a href="<?= base_url() ?>admin/showteach" aria-expanded="true"><i class="ti-id-badge"></i><span>Management Teacher</span></a>

								</li>
								<li>
									<a href="<?= base_url() ?>admin/setpayment" aria-expanded="true"><i class="ti-money"></i><span>Payment Teacher</span></a>
								</li>
								<li><a href="<?= base_url() ?>admin/set_teacherhome"><i class="ti-user"></i> <span>Set Teacher Landing Page</span></a></li>
								<li><a href="<?= base_url() ?>admin/allreportpayment"><i class="ti-receipt"></i> <span>Report Payment</span></a></li>
								<li><a href="<?= base_url() ?>admin/allreportconfirm"><i class="ti-receipt"></i> <span>Log Report Confirmation Payment</span></a></li>
							<?php } else {
							?>
								<li><a href="<?= base_url() ?>guru/showteacher"><i class="ti-id-badge"></i> <span>Management Teacher</span></a></li>
								<li>
									<a href="<?= base_url() ?>guru/showlogpayment/<?= $user['kd_guru'] ?>" aria-expanded="true"><i class="ti-wallet"></i>
										<span>Show Log Payment Income</span></a>
								</li>
								<li>
									<a href="<?= base_url() ?>guru/confirm_yourpayment/<?= $user['kd_guru'] ?>" aria-expanded="true"><i class="ti-check-box"></i>
										<span>Confirmation Payment</span></a>
								</li>
							<?php
							} ?>


						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- sidebar menu area end -->
