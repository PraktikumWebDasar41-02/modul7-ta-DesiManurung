<?php
require_once("conn.php");
?>


<a href="conn.php" style="text-decoration: none;"> Kembali </a>

<br> <br>



	<body style="font-family: mimich">
		<?php
		$sql = "SELECT * FROM mahasiswa";
		
		if(mysqli_num_rows($data) > 0){
			while($row = mysqli_fetch_assoc($data)){
				?>
				 <tr>
				 	<td><?php echo $row["nama"] ?></td>
				 	<td><?php echo $row["nim"] ?></td>
				 	<td><?php echo $row["jenis_kel"] ?></td>
				 	<td><?php echo $row["programstudi"] ?></td>
				 	<td><?php echo $row["fakultas"] ?></td>
				 	<td><?php echo $row["asal"] ?></td>
				 	<td><?php echo $row["moto"] ?></td>
				 	<td> <a href='edit.php?nim=<?php echo $row['nim']?>' style="text-decoration: none;"> Edit </a>
				</tr>
				<?php
			}
		}else{
			echo "Data Anda Tidak Tersedia......!!!! ";
		}
		?>
	</body>
</table