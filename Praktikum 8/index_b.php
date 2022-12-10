<!DOCTYPE html>
<html>
<style>
    html{
        background-color: #A5F3E3 ;
    }
</style>
    <head>
        <title> https://Form Service Motor </title>
    </head>
    <body>
        <hr>
        <h2 align="center">Form Service</h2>
        <hr>

        <table border="1" align="center" width="100%">
            <tr bgcolor="blue">
                <th>Id_Pelanggan</th>
                <th>No_Plat</th>
                <th>Tanggal Service</th>
                <th>Nama Pemilik</th>
                <th>Alamat</th>
                <th>Jenis Motor</th>
                <th>Telepon</th>
                <th>Mekanik</th>
                <th>Keluhan</th>
                <th>Jenis Service</th>
                <th>Total Pembayaran</th>
            </tr>
            <tr>
                <?php
                    include "koneksi_b.php";
                    $query = mysqli_query($koneksi, "Select * From modul8b");
                    while ($data = mysqli_fetch_array($query)) { 
                ?>
                <td><?php echo $data['Id_Pelanggan']; ?></td>
                <td><?php echo $data['No_Plat']; ?></td>
                <td><?php echo $data['Tanggal Service']; ?></td>
                <td><?php echo $data['Nama Pemilik']; ?></td>
                <td><?php echo $data['Alamat']; ?></td>
                <td><?php echo $data['Jenis Motor']; ?></td>
                <td><?php echo $data['Telepon']; ?></td>
                <td><?php echo $data['Mekanik']; ?></td>
                <td><?php echo $data['Keluhan']; ?></td>
                <td><?php echo $data['Jenis Service']; ?></td>
                <td><?php echo $data['Total Pembayaran']; ?></td>
            </tr>
<?php
    }
?>
    </table>
    </body>
<html>