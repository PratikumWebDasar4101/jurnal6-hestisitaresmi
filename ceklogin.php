<?php
	require_once("db.php");
 	session_start();

 	$user=strlen($_POST['nim']) ? $_POST['nim'] : "Inputan tidak boleh kosong" ;
	$pass=strlen($_POST['pass']) ? $_POST['pass'] : "Inputan tidak boleh kosong" ;
	$sql = mysqli_query("SELECT * FROM siswa where user='$nim' && pass='$pass'");
	$num = mysqli_num_rows($sql);

 	if($user == "$user" && $pass == "$pass"){
 		$_SESSION['nim'] = $user;
 		header("Location:simpan.php");
 	}else{
 		echo "Maaf, username dan password anda salah!";
 	}



?>