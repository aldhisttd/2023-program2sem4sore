<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Form Data Laptop Baru</h1>
<br>
 <form action="proses.php" method="POST">
<label>Merek :</label>
<br>
<input type="text" name="Merek" placeholder="Masukkan merek">
<br>
	<label>Spesifikasi :</label>
	<br>
	<textarea placeholder="Masukkan Spesifikasi" name="Spesifikasi"></textarea>
	<br>
		<label>Harga :</label>
		<br>
		<input type="number" name="Harga" placeholder="Masukkan harga">
		<br>
			<label>Gambar :</label>
			<br>
			<input type="file" name="Gambar">
			<br>
			<br>
				<input type="submit" name="btn_submit" value="Submit">
</form>
</body>
</html>