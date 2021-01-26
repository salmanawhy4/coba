<?php 

$conn = mysqli_connect("localhost", "root", "", "auditbaru");


function query($query){
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}

	return $rows;
}


function tambah($data){
	global $conn;

	$Nama = $data["Nama"];
	$AIMS = $data["AIMS"];
	$Jemaat_Lokal = $data["Jemaat Lokal"];
	$Wilayah_Tugas = $data["Wilayah Tugas"];


	$query = "INSERT INTO auditcabang
VALUES
('','$Nama', '$AIMS', '$Jemaat_Lokal', '$Wilayah_Tugas')
";
mysqli_query($conn,$query );

return mysqli_affected_rows($conn);

error_reporting(0);
$return = $lookup_table[$row];
error_reporting(E_ALL);
return $return;
}


 ?>
