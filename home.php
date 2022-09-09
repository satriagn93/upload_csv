<div style="margin-top: -30px;" class="warning">
	<p style="font-size: 16px;"><strong>&nbsp &nbsp &nbsp &nbsp Attention! </strong> Aplikasi ini digunakan untuk update karyawan baru dari HRD ke Moodle melalui Upload file CSV.
		<a href="index.php?menu=user&aksi=import"> <button class="button button1">Upload CSV</button> </a>
	</p>
</div>
<div style="padding: 40px;">

	<table id="example" class="display" style="width:100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include 'koneksi.php';
			$employee = mysqli_query($koneksi, "select * from mdl_coba order by id desc");
			while ($row = mysqli_fetch_array($employee)) {
				echo "<tr>
		            <td>" . $row['id'] . "</td>
		            <td>" . $row['firstname'] . "</td>
		            <td>" . $row['lastname'] . "</td>
		            <td>" . $row['address'] . "</td>
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