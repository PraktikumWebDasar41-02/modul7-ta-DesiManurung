<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form method="post" action="conn.php">
			<tr>
				
				<td>NAMA : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				
				<td>NIM : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				
			</tr>
			<tr>
				<td>TANGGAL LAHIR</td>
				<td>
					<input type="date" name="tgl_lahir" >
				</td>
			</tr>
			<tr>
				<td>JENIS KELAMIN : </td>
				<td>
					<SELECT name="jenis">
					<option>====PILIH JENIS KELAMIN=====</option>
						<option name="jenis" value="WANITA">WANITA</option>
						<option name="jenis" value="PRIA">PRIA</option>
						</SELECT>
				</td>
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
			</tr>
			
			<tr>
				<td>FAKULTAS</td>
				<td>
						<input type="radio" name="fakultas" value="FAKULTAS ILMU TERAPAN">FAKULTAS ILMU TERAPAN</input><br>
						<input type="radio" name="fakultas" value="FAKULTAS INDUSTRI KREATIF">FAKULTAS INDUSTRI KREATIF</input><br>
						<input type="radio" name="fakultas" value="FAKULTAS TEKNIK ELEKTRO">FAKULTAS TEKNIK ELEKTRO</input>
				</td>
			</tr>

			<tr>
				<td>ASAL</td>
				<td><input type="textarea" name="asal"></td>
			</tr>
			<tr>
				<tr>
				<td>MOTO HIDUP</td>
				<td><input type="textarea" name="moto"></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim"></td>
			</tr>
			
		</form>
	</table><br><br>


	
</body>
</html>


