<div style="margin-top: -30px;" class="warning">
	<p style="font-size: 16px;"><strong>&nbsp &nbsp &nbsp &nbsp Attention! </strong> Aplikasi ini digunakan untuk update karyawan baru dari HRD ke Moodle melalui Upload file CSV.
		<a href="index.php?menu=user&aksi=import"> <button class="button button1">Upload CSV</button> </a>
	</p>
</div>
<div style="padding: 40px;">

	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>NIK</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Nomor HP</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include 'koneksi.php';
			$employee = mysqli_query($koneksi, "select * from mdl_user order by id desc");
			while ($row = mysqli_fetch_array($employee)) {
				echo "<tr>
		            <td>" . $row['idnumber'] . "</td>
		            <td>" . $row['firstname'] . "</td>
		            <td>" . $row['lastname'] . "</td>
		            <td>" . $row['phone1'] . "</td>
		            <td>" . $row['email'] . "</td>
		        </tr>";
			}
			?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable({
			// "ordering": false
		});
	});
</script>