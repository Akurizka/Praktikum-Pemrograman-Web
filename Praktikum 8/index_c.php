<!DOCTYPE html>
<html>
<style>
    html{
        background-color: #A5F3A5 ;
    }
</style>
    <head>
        <title> https://Form Klinik Sehat </title>
    </head>
    <body>
        <hr>
        <h2 align="center">Form Data Pasien</h2>
        <hr>

        <table border="1" align="center" width="90%">
            <tr bgcolor="yellow">
                <th>No_RM</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Umur</th>
                <th>Tempat/Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Status</th>
                <th>Poli Tujuan</th>
                <th>Jenis Pembayaran</th>
            </tr>
            <tr>
                <?php
                    include "koneksi_c.php";
                    $query = mysqli_query($koneksi, "Select * From modul8c");
                    while ($data = mysqli_fetch_array($query)) { 
                ?>
                <td><?php echo $data['No_RM']; ?></td>
                <td><?php echo $data['Nama']; ?></td>
                <td><?php echo $data['Nik']; ?></td>
                <td><?php echo $data['Umur']; ?></td>
                <td><?php echo $data['Tempat/Tanggal Lahir']; ?></td>
                <td><?php echo $data['Jenis Kelamin']; ?></td>
                <td><?php echo $data['Agama']; ?></td>
                <td><?php echo $data['Telepon']; ?></td>
                <td><?php echo $data['Alamat']; ?></td>
                <td><?php echo $data['Pekerjaan']; ?></td>
                <td><?php echo $data['Status']; ?></td>
                <td><?php echo $data['Poli Tujuan']; ?></td>
                <td><?php echo $data['Jenis Pembayaran']; ?></td>
            </tr>
<?php
    }
?>
    </table>
    </body>
<html>