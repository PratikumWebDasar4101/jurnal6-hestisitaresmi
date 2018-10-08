<?php
require_once("db.php");

$nim        =$_GET['nim'];
$siswa  	= mysqli_query($conn, "select * from siswa where nim='nim'");
$row        = mysqli_fetch_array($siswa);

function active_radio_button($value,$input){
    
    $result =  $value==$input?'checked':'';
    return $result;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" name="<?php echo $row['nim'];?>" name="nim">
	<table >
		<form action="update.php" method="POST">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" value="<?php echo $row['nim'];?>" name="nim" maxlength="10"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nama'];?>" name="nama" maxlength="35"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<input type="radio"  value="<?php echo $row['kelas'];?>" name="kelas" >D3MI<br>
					<input type="radio"  value="<?php echo $row['kelas'];?>"  name="kelas" >D3TT<br>
					<input type="radio" value="<?php echo $row['kelas'];?>" name="kelas" >D3TK<br>
					<input type="radio" value="<?php echo $row['kelas'];?>" name="kelas" >D3IF<br>
					<input type="radio" value="<?php echo $row['kelas'];?>" name="kelas">D3SISMED<br>
					<input type="radio" value="<?php echo $row['kelas'];?>" name="kelas">D3KA<br>
					
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" value="<?php echo $row['jeniskelamin'];?>" name="jeniskelamin" >Laki-Laki<br>
					<input type="radio" value="<?php echo $row['jeniskelamin'];?>" name="jeniskelamin" >Perempuan<br>
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="hobi" value="<?php echo $row['hobi'];?>" name="jeniskelamin">Browsing<br>
					<input type="checkbox" name="hobi" value="Menyendiri">Menyendiri<br>
					<input type="checkbox" name="hobi" value="<?php echo $row['hobi'];?>" name="jeniskelamin">Nonton<br>
					<input type="checkbox" name="hobi" value="<?php echo $row['hobi'];?>" >Jalan-Jalan<br>
				
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
  					<option value="<?php echo $row['fakultas'];?>" >Fakultas Teknik Elektro</option><br>
  					<option value="<?php echo $row['fakultas'];?>" >Fakultas Teknik Informatika</option><br>
  					<option value="<?php echo $row['fakultas'];?>" >Fakultas Rekayasa Industri</option><br>
  					<option value="<?php echo $row['fakultas'];?>" >Fakultas Industri Kreatif</option><br>
  					<option value="<?php echo $row['fakultas'];?>" >Fakultas Komunikasi Bisnis</option><br>
  					<option value="<?php echo $row['fakultas'];?>" >Fakultas Ekonomi Bisnis</option><br>
  					<option value="<?php echo $row['fakultas'];?>" >Fakultas Ilmu Terapan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['alamat'];?>"  name="alamat"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="submit" value="Simpan Perubahan"></td>
			</tr>
			
		</form>
	</table>

</body>
</html>