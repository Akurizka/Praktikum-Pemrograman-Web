<!DOCTYPE html>
<html>
<style>
    html{
        background-color: #E7DDA4;
    }
</style>
    <head>
        <title> Form Perpustakaan Madiun </title>
    </head>
    <body>
        <hr>
        <h2 align="center">Form Data Diri Perpustakaan Madiun</h2>
        <hr>
        
        <table border="1" align="center" width="70%">
            <tr bgcolor="#F5B836">
                <th>No_Peminjaman</th>
                <th>Nama</th>
                <th>Tempat/Tanggal Lahir</th>
                <th>Agama</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                <th>Status</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>
            <tr>
                <?php
                    include "koneksi.php";
                    $query = mysqli_query($koneksi, "Select * From modul8a");
                    while ($data = mysqli_fetch_array($query)) { 
                ?>
                <td><?php echo $data['No_Peminjaman']; ?></td>
                <td><?php echo $data['Nama']; ?></td>
                <td><?php echo $data['Tempat/Tanggal Lahir']; ?></td>
                <td><?php echo $data['Agama']; ?></td>
                <td><?php echo $data['Jenis Kelamin']; ?></td>
                <td><?php echo $data['Telepon']; ?></td>
                <td><?php echo $data['Status']; ?></td>
                <td><?php echo $data['Alamat']; ?></td>
                <td><?php echo $data['Email']; ?></td>
            </tr>
            
<?php
    }
?>
    </table>
    </body>
<html>