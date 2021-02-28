<div class="main-content-inner">

	<div class="row mt-3">
		<div class="col">
			<?= $this->session->flashdata('notify'); ?>

			<form action="<?= base_url() ?>admin/changeteacherlandingpage_act" method="POST">
				<?php
				foreach ($gurudet as $gr) {
				?>
					<div class="row mt-1">
						<div class="col">
							<label for="detailcode">Code Teacher Detail</label>
						</div>
						<div class="col">
							<input type="text" class="form-control" id="detailcode" name="guru_det" value="<?= $gr['guru_det'] ?>" readonly>
						</div>
					</div>
					<div class="row mt-1">
						<div class="col">
							<label for="codeteacher">Code Teacher</label>
						</div>
						<div class="col">
							<input type="text" class="form-control" id="code_teachernya" name="kd_guru" value="<?= $gr['kd_guru'] ?>" readonly>
						</div>
					</div>
					<div class="row mt-1">
						<div class="col">
							<label for="namteacher">Name Teacher</label>
						</div>
						<div class="col">
							<input type="text" class="form-control" id="name_teachernya" name="nama_guru" value="<?= $gr['nama_guru'] ?>" readonly>
						</div>
					</div>

					<div class="row mt-1">
						<div class="col">
							<label for="subrole">Subjects</label>
						</div>
						<div class="col">
							<select id="subjectmapel" class="form-control" name="mapel">
								<option selected><?= $gr['mapel'] ?></option>
								<option value="Reading">Reading</option>
								<option value="Listening">Listening</option>
								<option value="Writing">Writing</option>
								<option value="Vocabulary">Vocabulary</option>
							</select>
						</div>
					</div>
					<div class="row mt-1">
						<div class="col">
							<label for="subrole">Description About Teacher</label>
						</div>
						<div class="col">
							<textarea class="form-control" name="background" id="" cols="30" rows="3"><?= $gr['background'] ?></textarea>
						</div>
					</div>

				<?php }
				?>
				<div class="row mt-1">
					<div class="col">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					<div class="col">
						<a href="<?= base_url() ?>admin" class="btn btn-primary">Back</a>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>
</div>
</div>
<!-- main content area end -->


<div class="modal fade" id="SelectTeacher" data-keyboard="false" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Select Teacher</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Code Teacher</th>
							<th scope="col">Name Teacher</th>
							<th scope="col">Default Payment</th>
							<th scope="col">Role</th>
							<th scope="col">Sub Role</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($guru as $gr) {
						?>
							<tr>
								<td><?= $gr['kd_guru']; ?></td>
								<td><?= $gr['nama_guru']; ?></td>
								<td align="center"><?= $gr['gaji_utama']; ?></td>
								<td><?= $gr['role']; ?></td>
								<td><?= $gr['sub_role']; ?></td>
								<td><button id="pilihgurusaja" href="#" class="btn btn-success" data-kdguru="<?= $gr['kd_guru'] ?>" data-nmguru="<?= $gr['nama_guru'] ?>" data-gjutama="<?= $gr['gaji_utama'] ?>" data-rolenya="<?= $gr['role'] ?>" data-subrolenya="<?= $gr['sub_role'] ?>">Select</button></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$(document).on('click', '#pilihgurusaja', function() {
			var kodeguru = $(this).data('kdguru');
			var namaguru = $(this).data('nmguru');
			var gajiutama = $(this).data('gjutama');
			var rolegolongan = $(this).data('rolenya');
			var subrolegol = $(this).data('subrolenya');
			$('#code_teachernya').val(kodeguru);
			$('#name_teachernya').val(namaguru);
			$('#pilihan_role').val(rolegolongan);
			$('#pilihan_subrole').val(subrolegol);
			$('#SelectTeacher').modal('hide');
		});
	});
</script>
