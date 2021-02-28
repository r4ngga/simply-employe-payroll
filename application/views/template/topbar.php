 <!-- main content area start -->
 <div class="main-content">
 	<div class="page-title-area">
 		<div class="row align-items-center">
 			<div class="col-sm-6">
 				<div class="breadcrumbs-area clearfix">
 					<?php
						$role_akses =  $this->session->userdata('role');
						if ($role_akses == "admin" || $role_akses == "guru" || $role_akses == "karyawan" || $role_akses == "leader camp") {
						?>
 						<div class="nav-btn pull-left">
 							<span></span>
 							<span></span>
 							<span></span>
 						</div>
 						<div class="search-box pull-left">

 						</div>
 					<?php } ?>
 					<h4 class="page-title pull-left">Berliant Payment Worker</h4>
 					<?php
						$role_akses =  $this->session->userdata('role');
						if ($role_akses == "admin") {
						?>
 						<ul class="breadcrumbs pull-left">
 							<li><a href="<?= base_url() ?>admin">Home</a></li>
 							<li><span><?= $dashboard_breadcumb1; ?></span></li>
 						</ul>
 					<?php
						} elseif ($role_akses == "guru" || $role_akses == "karyawan" || $role_akses == "leader camp") {
						?>
 						<ul class="breadcrumbs pull-left">
 							<li><a href="<?= base_url() ?>guru">Home</a></li>
 							<li><span><?= $dashboard_breadcumb1; ?></span></li>
 						</ul>
 					<?php
						}
						?>

 				</div>
 			</div>
 			<div class="col-sm-6 clearfix">
 				<div class="user-profile pull-right">
 					<?php
						if ($role_akses == "admin") {
						?>
 						<img class="avatar user-thumb" src="<?= base_url() ?>assets/source/images/author/avatar.png" alt="avatar">
 						<h4 class="user-name dropdown-toggle" data-toggle="dropdown"> <?= $user['nama_guru']; ?> <i class="fa fa-angle-down"></i></h4>
 						<div class="dropdown-menu">
 							<a class="dropdown-item" href="<?= base_url() ?>admin/info_acc_admin/<?= $user['kd_guru'] ?>">Settings</a>
 							<a class="dropdown-item" href="<?= base_url() ?>auth/log_out">Log Out</a>
 						</div>
 					<?php
						} else if ($role_akses == "guru" || $role_akses == "karyawan" || $role_akses == "leader camp") {
						?>
 						<img class="avatar user-thumb" src="<?= base_url() ?>assets/source/images/author/avatar.png" alt="avatar">
 						<h4 class="user-name dropdown-toggle" data-toggle="dropdown"> <?= $user['nama_guru']; ?> <i class="fa fa-angle-down"></i></h4>
 						<div class="dropdown-menu">
 							<a class="dropdown-item" href="<?= base_url() ?>guru/info_acc/<?= $user['kd_guru'] ?>">Settings</a>
 							<a class="dropdown-item" href="<?= base_url() ?>auth/log_out">Log Out</a>
 						</div>

 					<?php
						} else { ?>
 						<a class="user-name dropdown-toggle" href="<?= base_url() ?>auth/login">
 							<h5> Login</h5>
 						</a>
 					<?php
						}
						?>


 				</div>
 			</div>
 		</div>
 	</div>

 	<!-- page title area end -->
