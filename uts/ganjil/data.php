<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Data Barang</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>tgl_lahir</th>
    <th>photo</th>
    <th>Action</th>
  </tr>
  <?php 
    
    include "proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM seri1");

    while($row = mysqli_fetch_array($data)){
    ?>
        <tr>
          <td><?php echo $row['ID'] ?></td>
            <td><?php echo $row['Nama'] ?></td>
            <td><?php echo $row['Alamat'] ?></td>
            <td><?php echo $row['tgl_lahir'] ?></td>
            <td>
                <img src="Photo/<?php echo $row['Photo'] ?>" width="100">
            </td>
            <td>
                <a href="hapus.php?id=<?php echo $row['ID'] ?>">Hapus</a> - 
                <a href="edit.php?id=<?php echo $row['ID'] ?>">Edit</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>

</body>
</html>