<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Data Pembayaran</h2>

<table>
    <tr>
        <th>nomor_tagihan</th>
        <th>tanggal</th>
        <th>jenis_tagihan</th>
        <th>nominal</th>
        <th>bukti_transfer</th>
        <th>Action</th>
    </tr>
<?php 
    include "proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM pembayaran");

    while($row = mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $row['nomor_tagihan'] ?></td>
    <td><?php echo $row['tanggal'] ?></td>
    <td><?php echo $row['jenis_tagihan'] ?></td> 
    <td><?php echo $row['nominal'] ?></td>
    <td>
        <a href="bukti_transfer/<?php echo $row['bukti_transfer'] ?>">download</a>
    </td>
    <td>
        <a href="edit.php?kode=<?php echo $row['nomor_tagihan'] ?>">Edit</a>
        <a href="hapus.php?kode=<?php echo $row['nomor_tagihan'] ?>">Hapus</a> - 
    </td>
</tr>
<?php
    }
    ?>
</table>
</body>
</html>