<?php
$masuk=mysqli_connect("localhost","root","","mahasiswa");
$data=mysqli_query($masuk,"SELECT * FROM maha");

if(isset($_POST['kirim'])){
	$nama=$_POST["nama"];
	$nim=$_POST["nim"];
	$tgl_lahir=$_POST["tgl_lahir"];
	$jenis=$_POST["jenis"];
	$programstudi=$_POST["programstudi"];
	$fakultas=$_POST["fakultas"];
	$asal=$_POST["asal"];
	$moto=$_POST["moto"];



$con=mysqli_query($masuk,"INSERT INTO maha VALUES ('','$nama','$nim','$tgl_lahir','$jenis','$programstudi','$fakultas','$asal','$moto')");

 if ($con){
 	echo "DATA TELAH DISIMPAN";
 }else{
 	echo "GAGAL DISIMPAN";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>nama</th>
			<th>nim</th>
			<th>tgl_lahir</th>
			<th>jenis</th>
			<th>programstudi</th>
			<th>fakultas</th>
			<th>asal</th>
			<th>moto</th>
			<th>aksi</th>
		</tr>
		<?php
		while($ya=mysqli_fetch_assoc($data)){?>
			<tr>
				<td><?php echo $ya["nama"]; ?></td>
				<td><?php echo $ya["nim"]; ?></td>
				<td><?php echo $ya["tgl_lahir"]; ?></td>
				<td><?php echo $ya["jenis"]; ?></td>
				<td><?php echo $ya["programstudi"]; ?></td>
				<td><?php echo $ya["fakultas"]; ?></td>
				<td><?php echo $ya["asal"]; ?></td>
				<td><?php echo $ya["moto"]; ?></td>
				<td> <a href="hapus.php?id=<?php echo $ya['id']; ?>">HAPUS</a></td>
			</tr>
		<?php }; ?>
	</table>

</body>
</html>