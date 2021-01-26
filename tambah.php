<?php
require 'functions.php';

$conn = mysqli_connect("localhost", "root", "", "auditbaru"); 

if ( isset($_POST["submit"]) ) {
	
	if (tambah($_POST) > 0 ) {
		echo "<script>
			alert('data berhasil ditambahkan!');
			document.location.href = 'index.php'
		</script>";
	}else{
		echo "<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'index.php'
		</script>";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data auditor</title>
</head>
<body>
	<h1>Input data auditor daerah</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="Nama">Nama 		:</label>
				<input type="text" name="Nama" id="Nama">
			</li>
			<li>
				<label for="AIMS">AIMS 		:</label>
				<input type="text" name="AIMS" id="AIMS">
			</li>
			<li>
				<label for="Jemaat Lokal">Jemaat Lokal 	:</label>
				<input type="text" name="Jemaat Lokal" id="Jemaat Lokal">
			</li>
			<li>
				<label for="Wilayah Tugas">Wilayah Tugas 	:</label>
				<input type="text" name="Wilayah Tugas" id="Wilayah Tugas">
			</li>
			<li>
				<button type="submit" name="submit">Simpan</button>
			</li>
		</ul>


	</form>

</body>
</html>