<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<style type="text/css">
		body{
			font-family: Arial;
			color: black;
		}
	</style>
</head>
<body>
	<center>
		<h1>PT. GLOBAL VACANCY</h1>
		<h2>Laporan Kehadiran Pegawai</h2><br><br><br><br>
	</center>

	<?php 
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
	 ?>

   <table>
   	<tr>
   		<td>Bulan</td>
   		<td>:</td>
   		<td><?php echo $bulan ?></td>
   	</tr>

   	<tr>
   		<td>Tahun</td>
   		<td>:</td>
   		<td><?php echo $tahun ?></td>
   	</tr>

   </table>

   <table class="table table-bordered table-striped mt-2">
		<tr>
			<th>No</th>
			<th>Nama Pegawai</th>
			<th>NIK</th>
			<th>Jabatan</th>
			<th>Hadir</th>
			<th>Sakit</th>
			<th>Alpha</th>
		</tr>

		<?php $no=1; foreach($lap_kehadiran as $l) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $l->nama_pegawai ?></td>
			<td><?php echo $l->nik ?></td>
			<td><?php echo $l->jabatan ?></td>
			<td><?php echo $l->hadir ?></td>
			<td><?php echo $l->sakit ?></td>
			<td><?php echo $l->alpha ?></td>
		</tr>

  <?php endforeach; ?>

	</table>

	<table width="100%">
		<tr>
			<td></td>
			<td width="200px">
				<p>Tegal, <?php echo date(" d M Y") ?> <br> Finance</p>
				<br>
				<br>
				<p>______________________</p>
			</td>
		</tr>
	</table>

</body>
</html>

<script type="text/javascript">
	window.print();
	
</script>