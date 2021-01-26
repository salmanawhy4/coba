<?php 
require 'functions.php';

$auditcabang = query("SELECT * FROM auditcabang");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
<h1>Data Auditor Daerah</h1>
<table >
	<a href="tambah.php">+ Tambah Data</a>
</table><br><br>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>AIMS</th>
		<th>Jemaat Lokal</th>
		<th>Wilayah Tugas</th>
		<th>#</th>
	</tr>
	<?php  $i = 1; ?>
	<?php 
	foreach ($auditcabang as $row ) :
	 ?>
<tr>
	<td><?= $i; ?></td>
	<td><?= $row ["Nama"]; ?></td>
	<td><?= $row ["AIMS"]; ?></td>
	<td><?= $row ["Jemaat Lokal"]; ?></td>
	<td><?= $row ["Wilayah Tugas"]; ?></td>
	<td><a href="">edit</a></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</body>
</html>