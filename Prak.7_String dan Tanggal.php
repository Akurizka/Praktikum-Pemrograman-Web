<html>
<head><title>Tugas String dan Tanggal</title>
<body>
<form>
Masukkan Nama, Email dan Password <br>
Default Nama = belajar, Email = test@gmail.com dan Password = 
madiun <br>
Isian data :<br>
<tr><td>Nama</td><td>:</td><td>   <INPUT TYPE=TEXT NAME=password>
<br/>
<tr><td>Email</td><td>:</td><td>   <INPUT TYPE=TEXT NAME=email>
<br/>
<tr><td>Password</td><td>:</td><td> <INPUT TYPE=PASSWORD NAME=password>
<br/>
<INPUT TYPE=SUBMIT VALUE="Cek"><br>
</form>
<?php
printf("Tanggal Sekarang : %s ", Date("d F Y")); echo "<br>";
if (isset($email))
 if (empty($email))
 print("Harap mengisi email <br>\n");
else
 {
//cek email
//if (ereg("^.+@.+\\..+$", $email))
if (ereg("test@gmail.com", $email))
 print("Alamat email $email valid<br>\n");
else
 print("Alamat email $email tidak valid<br>\n");
 }
 if (isset($password))
 {
 $nama = "belajar";
 $pass_valid = crypt("madiun", $nama);
 $enkripsi = crypt($password, $nama);
 
 if ($pass_valid == $enkripsi)
print("Password valid");
 else
print("Password salah");
 }
?>
</body></html>