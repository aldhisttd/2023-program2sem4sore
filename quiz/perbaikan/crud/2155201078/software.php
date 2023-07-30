<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Laptop</title>
	<style>
		#software {
		  font-family: Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		#software td, #software th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#software tr:nth-child(even){background-color: #f2f2f2;}

		#software tr:hover {background-color: #ddd;}

		#software th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #04AA6D;
		  color: white;
		}
		</style>

</head>
<body>
	<?php include "component/menu.php" ?>
<h1>Data Software</h1>
<table id="software">
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
$data =mysqli_query($conn,"SELECT * FROM software");

while ($row = mysqli_fetch_array($data)) {
?>
	<tr>
    <td><?php echo $row['sn']; ?></td>
    <td><?php echo $row ['tanggal_rilis'];?></td>
    <td><?php echo $row['jenis']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['spesifikasi']; ?></td>
    <td><img src="gambar/<?php echo $row['gambar'];?>" width="100"></td>
    <td>
      <a href="hapus.php?kode=<?php echo $row['kode'] ?>">Hapus</a> - 
      <a href="edit.php?kode=<?php echo $row['kode'] ?>">Edit</a>
    </td>
  	</tr>
 <?php 
}
 ?>

</table>
</body>
</html>