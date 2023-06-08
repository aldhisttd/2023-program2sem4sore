
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Data Barang</h2>

<table>
  <tr>
    <th>Kode</th>
    <th>Nama</th>
    <th>Satuan</th>
    <th>Harga</th>
    <th>Gambar</th>
    <th>Action</th>
  </tr>
  <?php 
    include "proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM barang");

    while($row = mysqli_fetch_array($data)){
    ?>
        <tr>
          <td><?php echo $row['kode_barang'] ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['satuan'] ?></td>
            <td><?php echo $row['harga'] ?></td>
            <td>
                <img src="gambar/<?php echo $row['gambar'] ?>" width="100">
            </td>
            <td>
                <a href="#">Hapus</a> - 
                <a href="#">Edit</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>

</body>
</html>

