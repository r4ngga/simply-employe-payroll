<div class="main-content-inner">

	<div class="row mt-3">
		<div class="col">
			<?= $this->session->flashdata('notify'); ?>
			<!-- <div class="card card-lg bg-light border-info" style="width: 18rem;"> -->
			<a href="" class="btn btn-secondary" data-toggle="modal" data-target="#SelectAllTeacher">Select Staff</a>

			<form action="<?= base_url() ?>admin/payment_act" method="POST">
				<div class="row mt-1">
					<div class="col">
						<label for="paymentcode">Payment Code</label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="payent" name="kd_gaji" value="<?= $rand_string ?>">
					</div>
				</div>
				<?php
				//foreach ($guru as $gr) {
				?>
				<div class="row mt-1">
					<div class="col">
						<label for="codeteacher">Code Teacher</label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="codeteachernya" name="kd_guru" value="" readonly>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<label for="namteacher">Name Teacher</label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="nameteachernya" name="nama_guru" value="" readonly>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<label for="role">Role </label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="pilihanrole" name="role" value="" readonly>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<label for="subrole">Sub Role </label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="pilihansubrole" name="sub_role" onkeyup="hitungcoba()" value="" readonly>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<label for="defpay">Default Payment </label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="defaultgaji" name="gaji_utama" onkeyup="hitungcoba()" value="" readonly>
					</div>
				</div>
				<?php //} 
				?>
				<div class="row mt-1">
					<div class="col">
						<label for="banyakpertemuan">How Much Attend </label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="banyak_pertemuan" autofocus="on" name="banyak_pertemuan" onkeyup="hitungcoba()">
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<label for="banyakplacementtes">How Much Interview Placement Test</label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="pt" name="pt" autofocus="on" onkeyup="hitungcoba()">
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<label for="bonuspt">Bonus Interview Placement Test</label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="bonus_pt" name="bonus_pt" autofocus="on" onkeyup="hitungcoba()">
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<label for="welcomenewbi">How Much Welcoming Newbies</label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="wn" name="wn" autofocus="on" onkeyup="hitungcoba()">
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<label for="bonuswn">Bonus Welcoming Newbies</label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="bonus_wn" name="bonus_wn" autofocus="on" onkeyup="hitungcoba()">
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<label for="totaldefpayment">Total Default Payment</label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="total_gaji" name="total_gaji" autofocus="on" onkeyup="hitungcoba()" onchange="hitungcoba()">
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<label for="totbonuspay">Total Bonus Payment </label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="totalbonus" name="totalbonus" autofocus="on" onkeyup="hitungcoba()" onchange="hitungcoba()">
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<label for="totalpaymentwithbonus">Total Payment With Bonus</label>
					</div>
					<div class="col">
						<input type="text" class="form-control" id="total_gajilembur" name="total_gajilembur" autofocus="on" onkeyup="hitungcoba()">
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<label for="datesend">Date Send Payment </label>
					</div>
					<div class="col">
						<input type="date" class="form-control" id="tgl_terima" name="tgl_terima">
					</div>
				</div>
				<div class="row mt-1">
					<div class="col">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					<div class="col">
						<a href="<?= base_url() ?>admin/showteach" class="btn btn-primary">Back</a>
					</div>
				</div>

			</form>

			<!-- </div> -->
		</div>
	</div>
	<!-- row area end -->

	<!-- row area start-->
</div>
</div>
<!-- main content area end -->


<div class="modal fade" id="SelectAllTeacher" data-keyboard="false" tabindex="-1" aria-hidden="true">
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
								<td><button id="pilihgurudigaji" href="#" class="btn btn-success" data-kdguru="<?= $gr['kd_guru'] ?>" data-nmguru="<?= $gr['nama_guru'] ?>" data-gjutama="<?= $gr['gaji_utama'] ?>" data-rolenya="<?= $gr['role'] ?>" data-subrolenya="<?= $gr['sub_role'] ?>">Select</button></td>
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
		$(document).on('click', '#pilihgurudigaji', function() {
			var kodeguru = $(this).data('kdguru');
			var namaguru = $(this).data('nmguru');
			var gajiutama = $(this).data('gjutama');
			var rolegolongan = $(this).data('rolenya');
			var subrolegol = $(this).data('subrolenya');
			$('#codeteachernya').val(kodeguru);
			$('#nameteachernya').val(namaguru);
			$('#defaultgaji').val(gajiutama);
			$('#pilihanrole').val(rolegolongan);
			$('#pilihansubrole').val(subrolegol);
			$('#SelectAllTeacher').modal('hide');
		});

	});

	function hitungcoba() {
		var wn = parseInt(document.getElementById("wn").value);
		var pt = parseInt(document.getElementById("pt").value);
		var bonus_wn = parseInt(document.getElementById("bonus_wn").value);
		var bonus_pt = parseInt(document.getElementById("bonus_pt").value);
		var role = document.getElementById("pilihanrole").value;
		var sub_role = document.getElementById("pilihansubrole").value;
		var tot_gjdgnlembur = parseInt(document.getElementById("total_gajilembur").value);
		var defaultgaji = parseInt(document.getElementById("defaultgaji").value);
		var tot_uanglembur = parseInt(document.getElementById("totalbonus").value);
		var parsevariabel = parseInt(document.getElementById('total_gajilembur').value);
		//var tot_gjtnplembur  = parseInt(document.getElementById("total_gaji").value);

		//contoh
		var byk_pertemuan = parseInt(document.getElementById("banyak_pertemuan").value);
		var tot_gjtnplembur = parseInt(document.getElementById("total_gaji").value);
		//  tot_gjtnplembur =  30000 * byk_pertemuan;
		// parseInt(document.getElementById('total_gaji').value = tot_gjtnplembur);

		if (role == "guru") {
			if (sub_role == "kelas A") {
				tot_gjtnplembur = defaultgaji * byk_pertemuan;
				parseInt(document.getElementById('total_gaji').value = tot_gjtnplembur);
				bonus_wn = 50000 * wn;
				parseInt(document.getElementById('bonus_wn').value = bonus_wn);
				bonus_pt = 50000 * pt;
				parseInt(document.getElementById('bonus_pt').value = bonus_pt);
				tot_uanglembur = bonus_pt + bonus_wn;
				parseInt(document.getElementById('totalbonus').value = tot_uanglembur);
				tot_gjdgnlembur = tot_uanglembur + tot_gjtnplembur;
				parseInt(document.getElementById('total_gajilembur').value = tot_gjdgnlembur);
			} else if (sub_role == "kelas B") {

				tot_gjtnplembur = defaultgaji * byk_pertemuan;
				parseInt(document.getElementById('total_gaji').value = tot_gjtnplembur);
				bonus_wn = 50000 * wn;
				parseInt(document.getElementById('bonus_wn').value = bonus_wn);
				bonus_pt = 50000 * pt;
				parseInt(document.getElementById('bonus_pt').value = bonus_pt);
				tot_uanglembur = bonus_pt + bonus_wn;
				parseInt(document.getElementById('totalbonus').value = tot_uanglembur);
				tot_gjdgnlembur = tot_uanglembur + tot_gjtnplembur;
				parseInt(document.getElementById('total_gajilembur').value = tot_gjdgnlembur);

			} else if (sub_role == "kelas C") {

				tot_gjtnplembur = defaultgaji * byk_pertemuan;
				parseInt(document.getElementById('total_gaji').value = tot_gjtnplembur);
				bonus_wn = 50000 * wn;
				parseInt(document.getElementById('bonus_wn').value = bonus_wn);
				bonus_pt = 50000 * pt;
				parseInt(document.getElementById('bonus_pt').value = bonus_pt);
				tot_uanglembur = bonus_pt + bonus_wn;
				parseInt(document.getElementById('totalbonus').value = tot_uanglembur);
				tot_gjdgnlembur = tot_uanglembur + tot_gjtnplembur;
				parseInt(document.getElementById('total_gajilembur').value = tot_gjdgnlembur);

			}
		} else if (role == "leader camp") {
			window.onload = document.getElementById('total_gaji');
			var gjnya = document.getElementById("total_gaji");
			tot_gjtnplembur = defaultgaji * byk_pertemuan;
			parseInt(document.getElementById('total_gaji').value = tot_gjtnplembur);
			// gjnya.value = "300000";

		} else if (role == "karyawan") {
			window.onload = document.getElementById('total_gaji');
			var gjnya = document.getElementById("total_gaji");
			tot_gjtnplembur = defaultgaji * byk_pertemuan;
			parseInt(document.getElementById('total_gaji').value = tot_gjtnplembur);
			// gjnya.value = "500000";
		}
	}
</script>
