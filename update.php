
<?php
require_once("db.php");
// menyimpan data kedalam variabel
$nim	= $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jeniskelamin	= $_POST['jeniskelamin'];
$hobi	= $_POST['hobi'];
$fakultas	= $_POST['fakultas'];
$alamat	= $_POST['alamat'];


// query SQL untuk insert data
$sql="UPDATE siswa SET nim='$nim',nama='$nama',kelas='$kelas', jeniskelamin='$jeniskelamin', hobi='$hobi', fakultas=$fakultas, alamat=$alamat where nim='$nim'";
mysqli_query($conn, $sql);
// mengalihkan ke halaman index.php
header("location:view.php");



?>




