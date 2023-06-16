
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
<?php include "component/menu.php" ?>

<h2>Data Barang</h2>

<table>
  <tr>
    <th>Kode Brand</th>
    <th>Brand</th>
    <th>Tipe</th>
    <th>Harga</th>
    <th>Browsur</th>
    <th>Action</th>
  </tr>

  <?php 
    
    include "proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM barang");

    while($row = mysqli_fetch_array($data)){
    ?>
        <tr>
          <td><?php echo $row['kode_brand'] ?></td>
            <td><?php echo $row['brand'] ?></td>
            <td><?php echo $row['tipe'] ?></td>
            <td><?php echo $row['harga'] ?></td>
            <td>
                <img src="gambar/<?php echo $row['gambar'] ?>" width="100">
            </td>
            <td>
                <a href="hapus.php?kode=<?php echo $row['kode_brand'] ?>">Hapus</a> - 
                <a href="edit.php?kode=<?php echo $row['kode_brand'] ?>">Edit</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>

</body>
</html>

