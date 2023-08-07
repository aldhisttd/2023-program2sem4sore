<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Input Data Laptop
	</title>
	<style>
	input[type=text],input[type=date],input[type=number], select,textarea{
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}

	button[type=submit] {
	  width: 100%;
	  background-color: #4CAF50;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}

	button[type=submit]:hover {
	  background-color: #45a049;
	}

	div {
	  border-radius: 20px;
	  background-color: #f2f2f2;
	  padding: 50px;
	}
	</style>
</head>
<body>
<?php include "component/menu.php" ?>	
<div>
	<h1>Form Input Data Software</h1>
<form action="proses/ex_software.php" method="POST" enctype="multipart/form-data">
	<label for="">SN</label>
	<input type="text" name="sn">
	<br>

	<label for="">Tanggal Rilis</label>
	<input type="date" name="tanggal_rilis">
	<br>

	<label for="">Jenis</label>
	<select name="jenis">
		<option>Editing</option>
		<option>Coding</option>
		<option>Tools</option>
	</select>
	<br>

	<label for="">Quantity</label>
	<input type="number" name="quantity">
	<br>

	<label for="">Spesifikasi</label>
	<textarea name="spesifikasi"></textarea>
	<br>

	<label for="">Gambar</label>
	<input type="file" name="gambar">
	<br>

	<button type="submit" name="input">Submit</button>
	<br>
</form>
</div>
</body>
</html>