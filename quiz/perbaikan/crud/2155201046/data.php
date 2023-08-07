
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
<?php include "proses/menu.php" ?>

<h2>Data Software</h2>

<table>
  <tr>
    <th>SN</th>
    <th>Tanggal Rilis</th>
    <th>Jenis</th>
    <th>Quantity</th>
    <th>Spesifikasi</th>
    <th>Gambar</th>
    <th>Action</th>
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
            <td><img src="gambar/<?php echo $row['gambar'] ?>"width="100">
            <td>
                <a href="hapus.php?sn=<?php echo $row['sn'] ?>">Hapus</a> - 
                <a href="edit.php?sn=<?php echo $row['sn'] ?>">Edit</a>
            </td>
        </tr>

    <?php
    }
    ?>
</table>

</body>
</html>
