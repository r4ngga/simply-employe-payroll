        <!-- main content area start -->
        <div class="main-content">
        	<!-- header area start -->
        	<!-- <div class="header-area"> -->
        	<!-- <div class="row align-items-center"> -->
        	<!-- nav and search button -->
        	<!-- <div class="col-md-6 col-sm-8 clearfix"> -->
        	<!-- <div class="nav-btn pull-left">
        					<span></span>
        					<span></span>
        					<span></span>
        				</div>
        				<div class="search-box pull-left">

        				</div> -->
        	<!-- </div> -->
        	<!-- profile info & task notification -->
        	<!-- <div class="col-md-6 col-sm-4 clearfix">
        				<ul class="notification-area pull-right">
        					<li class="dropdown">
        					</li>
        					<li class="dropdown">
        					</li>

        				</ul>
        			</div> -->
        	<!-- </div> -->
        	<!-- </div> -->
        	<!-- header area end -->
        	<!-- page title area start -->
        	<div class="page-title-area">
        		<div class="row align-items-center">
        			<div class="col-sm-6">
        				<div class="breadcrumbs-area clearfix">
        					<div class="nav-btn pull-left">
        						<span></span>
        						<span></span>
        						<span></span>
        					</div>
        					<div class="search-box pull-left">

        					</div>
        					<h4 class="page-title pull-left">Berliant Payment Worker</h4>
        					<?php
							$role_akses =  $this->session->userdata('role');
							if ($role_akses == "admin") {
							?>
        						<ul class="breadcrumbs pull-left">
        							<li><a href="<?= base_url() ?>admin">Home</a></li>
        							<li><span>Dashboard</span></li>
        						</ul>
        					<?php
							} elseif ($role_akses == "guru") {
							?>
        						<ul class="breadcrumbs pull-left">
        							<li><a href="<?= base_url() ?>guru">Home</a></li>
        							<li><span>Dashboard</span></li>
        						</ul>
        					<?php
							} else {
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
        							<a class="dropdown-item" href="#">Message</a>
        							<a class="dropdown-item" href="#">Settings</a>
        							<a class="dropdown-item" href="<?= base_url() ?>auth/log_out">Log Out</a>
        						</div>
        					<?php
							} else if ($role_akses == "guru") {
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
        	<div class="main-content-inner">
        		<!-- sales report area start -->
        		<div class="sales-report-area mt-5 mb-5">
        			<div class="row">
        				<div class="col-md-4">

        				</div>
        				<div class="col-md-4">

        				</div>
        				<div class="col-md-4">

        				</div>
        			</div>
        		</div>
        		<!-- sales report area end -->
        		<!-- overview area start -->
        		<div class="row">
        			<div class="col-xl-9 col-lg-8">

        			</div>
        			<div class="col-xl-3 col-lg-4 coin-distribution">
        				<div class="card h-full">

        				</div>
        			</div>
        		</div>
        		<!-- overview area end -->
        		<!-- market value area start -->
        		<div class="row mt-5 mb-5">
        			<div class="col-12">
        				<div class="card">

        				</div>
        			</div>
        		</div>
        		<!-- market value area end -->
        		<!-- row area start -->
        		<div class="row">
        			<!-- Live Crypto Price area start -->
        			<div class="col-lg-4">
        				<div class="card">

        				</div>
        			</div>
        			<!-- Live Crypto Price area end -->
        			<!-- trading history area start -->
        			<div class="col-lg-8 mt-sm-30 mt-xs-30">
        				<div class="card">

        				</div>
        			</div>
        			<!-- trading history area end -->
        		</div>
        		<!-- row area end -->
        		<div class="row mt-5">
        			<!-- latest news area start -->
        			<div class="col-xl-6">
        				<div class="card">

        				</div>
        			</div>
        			<!-- latest news area end -->
        			<!-- exchange area start -->
        			<div class="col-xl-6 mt-md-30 mt-xs-30 mt-sm-30">
        				<div class="card">

        				</div>
        			</div>
        			<!-- exchange area end -->
        		</div>
        		<!-- row area start-->
        	</div>
        </div>
        <!-- main content area end -->
