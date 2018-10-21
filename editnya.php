<?php

$id = $_GET['nim'];
$sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$id'");
$row = mysqli_fetch_assoc($sql);
if(isset($_POST['upload'])){
 $nim				= $_POST["nim"];
 $nama 				= $_POST["nama"];
 $jenis				= $_POST["jenis"];
 $programstudi				= $_POST["programstudi"];
 $fakultas			= $_POST["fakultas"];
 $asal 				= $_POST["asal"];
 $moto		= $_POST["moto"];
 $sql = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', jenis = '$jenis', programstudi = '$programstudi', fakultas = '$fakultas', asal = '$asal', moto = '$moto' WHERE nim='$id'";
 if (mysqli_query($conn, $sql)) {
 header('Location: tampil.php');
 }else {
 echo "Data gagal diupload! " . $sql . "<br?" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>

		<h1>EDIT DATA</h1>

		<tr>
				
				<td>NAMA : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<br>
				
				<td>NIM : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<br>
				
			</tr>
			<tr>
				<td>TANGGAL LAHIR</td>
				<td>
					<input type="date" name="tgl_lahir" >
				</td>
			</tr>
			<tr>
				<br>
				<td>JENIS KELAMIN : </td>
				<td>
					<SELECT name="jenis">
					<option>====PILIH JENIS KELAMIN=====</option>
						<option name="jenis" value="WANITA">WANITA</option>
						<option name="jenis" value="PRIA">PRIA</option>
						</SELECT>
				</td>
				<br>
			</tr>
				<tr>
				<td> PROGRAM STUDI : </td>
				<td>
					<select name="programstudi">
				
					<option name="programstudi" value="sistem informasi">sistem informasi</option>
					<option name="programstudi" value="teknik informatika">teknik informatika</option>
					<option name="programstudi" value="teknik elektro">teknik elektro</option>
					</select>
				</td>
				<br>
			</tr>
			
			<tr>
				<td>FAKULTAS</td>
				<td>
						<td><input type="radio" name="fakultas" value="FAKULTAS ILMU TERAPAN">FAKULTAS ILMU TERAPAN</input><br></td>
						<td><input type="radio" name="fakultas" value="FAKULTAS INDUSTRI KREATIF">FAKULTAS INDUSTRI KREATIF</input><br></td>
						<td><input type="radio" name="fakultas" value="FAKULTAS TEKNIK ELEKTRO">FAKULTAS TEKNIK ELEKTRO</input></td>
				</td><br>
			</tr>

			<tr>
				<td>ASAL</td>
				<td><input type="textarea" name="asal"></td>
			</tr>
			<tr>
				<br>
				<tr>
				<td>MOTO HIDUP</td>
				<td><input type="textarea" name="moto"></td>
			</tr>
			<tr>
				<br>
				<td><input type="submit" name="kirim"></td>
			</tr>
			

	</form>

</body>

</html>