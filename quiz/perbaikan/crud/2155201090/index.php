<?php
include 'koneksi.php';

// Fungsi untuk menampilkan tanggal dalam format yang sesuai
function formatDate($date)
{
    return date('d F Y', strtotime($date));
}

// Mendapatkan data dari tabel software
$sql = "SELECT * FROM software";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD Software</title>
</head>

<body>
    <h2>Daftar Software</h2>
    <a href="add.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No. Serial</th>
            <th>Tanggal Rilis</th>
            <th>Jenis</th>
            <th>Quantity</th>
            <th>Spesifikasi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['sn'] . "</td>";
                echo "<td>" . formatDate($row['tanggal_rilis']) . "</td>";
                echo "<td>" . $row['jenis'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['spesifikasi'] . "</td>";
                echo "<td><img src='gambar/" . $row['gambar'] . "' width='100'></td>";
                echo "<td>
                        <a href='edit.php?sn=" . $row['sn'] . "'>Edit</a> |
                        <a href='delete.php?sn=" . $row['sn'] . "'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
        }
        ?>
    </table>
</body>

</html>
