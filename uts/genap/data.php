<!DOCTYPE html>
<html lang="en">
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    
<?php include 'component/menu.php' ?>

<h2> Seri 1</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Photo</th>
        <th>Action</th>
    </tr>

    <?php
    
    include 'proses/koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * FROM seri1");

    while($row = mysqli_fetch_array($data)){

    ?>

    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td><?php echo $row['alamat'] ?></td>
        <td><?php echo $row['tgl_lahir'] ?></td>
        <td>
            <img src="photo/<?php echo $row['photo'] ?>" width="100" height="100">
        </td>
        <td>
            <a href="hapus.php?id=<?php echo $row['id']?>">Hapus</a> -
            <a href="edit.php?id=<?php echo $row['id']?>">Edit</a>
        </td>
    </tr>

    <?php
    }
    ?>


</table>
</body>
</html>