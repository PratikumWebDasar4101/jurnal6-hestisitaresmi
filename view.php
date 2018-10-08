<?php
 
require_once("db.php");
?>


<html>
<table border="1" align="center">
<head >
	<th>Nim</th>
	<th>Nama</th>
	<th>Kelas</th>
	<th>Jenis Kelamin</th>
	<th>Hobi</th>
	<th>Fakultas</th>
	<th>Alamat</th>
	<th>Action</th>
	
</head>
<body>


<?php
 $sql = "SELECT * FROM siswa";

 //sEECT COUNT(*) FROM SISWA JOIN KEHADIRAN 
 $result = mysqli_query($conn, $sql);

 if(mysqli_num_rows($result) > 0){
 	//output data each row
 	while ( $row = mysqli_fetch_assoc($result)) {
 		# code...
 		$nim= $row['nim'];
 		echo "<tr>";
 		echo "<td>".$row['nim']."</td>";
 		echo "<td>".$row['nama']."</td>";
 		echo "<td>".$row['kelas']."</td>";
 		echo "<td>".$row['jeniskelamin']."</td>";
 		echo "<td>".$row['hobi']."</td>";
 		echo "<td>".$row['fakultas']."</td>";
 		echo "<td>".$row['alamat']."</td>";
 		echo "<td>"."<a href='edit.php?nim=$nim'>Edit</a>"."</td>";
 		echo "</tr>";
 	}
 } else {
 	echo "0 results";
 }
mysqli_close($conn);

?>

</body>
</table>
</html>