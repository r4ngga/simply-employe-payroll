<div class="main-content-inner bg-gray">
	<?= $this->session->flashdata('notify'); ?>
	<!-- sales report area start -->
	<div class="sales-report-area mt-5 mb-5 ml-5">
		<h3 class="card-title">List Staff Worker</h3>
		<div class="row">
			<?php
			foreach ($detail as $det) {
			?>
				<div class="col-md-4">

					<div class="card bg-light border-info" style="width: 18rem;">
						<img src="<?= base_url() ?>assets/source/images/author/avatar.png" class="card-img-top" alt="avatar">
						<div class="card-body">
							<h5 class="card-title"><?= $det['nama_guru'] ?></h5>
							<p class="card-text"><?= $det['mapel'] ?>.</p>
							<p class="card-text"><?= $det['background'] ?>.</p>
						</div>
					</div>

				</div>
			<?php } ?>
		</div>
	</div>

</div>
</div>
<!-- main content area end -->
