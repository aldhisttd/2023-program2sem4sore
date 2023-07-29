
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
    <td>SN</td>
    <td>Tanggal Rilis</td>
    <td>Jenis</td>
    <td>Quantity</th>
    <td>Spesifikasi</th>
    <td>Gambar</th>
    <td>Aksi</th>
  </tr>

  <?php 
    
    include "proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM software");

    while($row = mysqli_fetch_array($data)){
    ?>
        <tr>
          <td><?php echo $row['sn'] ?></td>
            <td><?php echo $row['tanggal_rilis'] ?></td>
            <td><?php echo $row['jenis'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['spesifikasi'] ?></td>
            <td>
          <img width="50" src="file/<?php echo $row['gambar'] ?>" alt="">
           </td>
            <td>
                <a href="hapus.php?kode=<?php echo $row['sn'] ?>">Hapus</a> - 
                <a href="edit.php?kode=<?php echo $row['sn'] ?>">Edit</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>

</body>
</html>

