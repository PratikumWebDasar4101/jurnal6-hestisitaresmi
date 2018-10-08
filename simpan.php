<?php

require_once("db.php");

$nim	= $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jeniskelamin	= $_POST['jeniskelamin'];
$hobi	= $_POST['hobi'];
$fakultas	= $_POST['fakultas'];
$alamat	= $_POST['alamat'];

$sql = " INSERT INTO siswa (nim, nama, kelas, jeniskelamin, hobi, fakultas, alamat)
		VALUES('$nim', '$nama', '$kelas', '$jeniskelamin', '$hobi', '$fakultas', '$alamat')";

// echo $sql;

if(mysqli_query($conn, $sql)){
	header("Location:view.php");
}else{
	echo "Error: ".$sql. "<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>