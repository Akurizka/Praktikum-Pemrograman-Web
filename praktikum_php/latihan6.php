<!DOCTYPE html>
<html>
 	<head>
 		<titile>LATIHAN 6 PEMOGRAMAN WEB</titile>
 	</head>
 	<body>
		<form method="post">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"/></td>
				</tr>
				<tr>
					<td>Mata Kuliah</td>
					<td>:</td>
					<td>
						<select name="mk">
							<option value="">---- Pilih Mata Kuliah ----</option>
							<option value="Pemrograman Terstruktur">Pemrograman Terstruktur</option>
							<option value="Pemrograman Web">Pemrograman Web</option>
							<option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
							<option value="Algoritma & Struktur Data">Algoritma & Struktur Data</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<input type="radio" name="ik" value="Laki-Laki"/>Laki-Laki<br/>
						<input type="radio" name="ik" value="Perempuan"/>Perempuan
					</td>
				</tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="email" name="email"/></td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit" value="Simpan"/>&nbsp;
					<input type="reset" name="Reset" value="Reset"/></td>
				</tr>
			</table>
		</form>

		<?php
			if (isset($_POST['submit'])) { 
				$nama = $_POST['nama']; 
				$mk= $_POST['mk']; 
				$jk = $_POST['ik']; 
				$email = $_POST['email']; 

				echo "INI OUTPUT SESUAI INPUTAN DARI FORM DIATAS <br/>";
				echo "Nama:" . $nama;
				echo "<br/>Mata Kuliah : " . $mk;
				echo "<br/>Jenis Kelamin : " . $jk;
				echo "<br/>Email: " . $email;
			}
		?>
	</body>
</html>

