<?php
// index.php

// Panggil file koneksi.php untuk menghubungkan ke database
require_once('koneksi.php');

// Fungsi untuk mendapatkan data dari tabel items
function getItems() {
    global $conn;
    $sql = "SELECT * FROM items";
    $result = $conn->query($sql);
    return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Items</title>
</head>
<body>
    <h2>Data Items</h2>
    <a href="add.php">Tambah Item</a>
    <table border="1">
        <tr>
            <th>Kode</th>
            <th>Tanggal Masuk</th>
            <th>Jenis</th>
            <th>Quantity</th>
            <th>Spesifikasi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
        $items = getItems();
        while ($row = $items->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['kode'] . "</td>";
            echo "<td>" . $row['tanggal_masuk'] . "</td>";
            echo "<td>" . $row['jenis'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['spesifikasi'] . "</td>";
            echo "<td><img src='uploads/" . $row['gambar'] . "' height='50'></td>";
            echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
