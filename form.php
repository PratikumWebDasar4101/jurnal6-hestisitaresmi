<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="simpan.php" method="POST">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" name="nim" maxlength="10"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" maxlength="35"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<input type="radio" name="kelas" value="D3MI">D3MI<br>
					<input type="radio" name="kelas" value="D3TT">D3TT<br>
					<input type="radio" name="kelas" value="D3TK">D3TK<br>
					<input type="radio" name="kelas" value="D3IF">D3IF<br>
					<input type="radio" name="kelas" value="D3SISMED">D3SISMED<br>
					<input type="radio" name="kelas" value="D3KA">D3KA<br>
					
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki<br>
					<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br>
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="hobi" value="Browsing">Browsing<br>
					<input type="checkbox" name="hobi" value="Menyendiri">Menyendiri<br>
					<input type="checkbox" name="hobi" value="Nonton">Nonton<br>
					<input type="checkbox" name="hobi" value="Jalan-Jalan">Jalan-Jalan<br>
				
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
  					<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option><br>
  					<option value="Fakultas Teknik Informatika">Fakultas Teknik Informatika</option><br>
  					<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option><br>
  					<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option><br>
  					<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option><br>
  					<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option><br>
  					<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="submit" value="Submit"></td>
			</tr>
			
		</form>
	</table>

</body>
</html>