<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Edit Data Laptop
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
<?php 
include "proses/koneksi.php";
    $sn = $_REQUEST['sn'];
    $q = mysqli_query($conn, "SELECT * FROM software WHERE sn='$sn'");
    $ary = mysqli_fetch_array($q);
 ?>
<div>
	<h1>Form Edit Data Software</h1>
<form action="proses/ex_edit.php?sn=<?php echo $ary['sn']; ?>" method="POST" enctype="multipart/form-data">
	<label for="">SN</label>
	<input type="text" name="sn" value="<?php echo $ary['sn'] ?>">
	<br>

	<label for="">Tanggal Rilis</label>
	<input type="date" name="tanggal_rilis" value="<?php echo $ary['tanggal_rilis'] ?>">
	<br>

	<label for="">Jenis</label>
	<select name="jenis"> 
		 <option value="Editing" <?php if ($ary['jenis'] === 'Editing') echo 'selected'; ?>>Editing</option>
		  <option value="Coding" <?php if ($ary['jenis'] === 'Coding') echo 'selected'; ?>>Coding</option>
		  <option value="Tools" <?php if ($ary['jenis'] === 'Tools') echo 'selected'; ?>>Tools</option>
	</select>
	<br>

	<label for="">Quantity</label>
	<input type="number" name="quantity" value="<?php echo $ary['quantity'] ?>">
	<br>

	<label for="">Spesifikasi</label>
	<textarea name="spesifikasi" ><?php echo $ary['spesifikasi'] ?></textarea>
	<br>

	<label for="">Gambar</label> 
	<input type="file" name="gambar">
	<br>
			<?php if (!empty($ary['gambar'])): ?>
            <img src="gambar/<?php echo $ary['gambar']; ?>" alt="Current Image"
              style="width: 100px">
          <?php else: ?>
            <p>No Image Found</p>
          <?php endif; ?>
	<button type="submit" name="input">Submit</button>
	<br>
</form>
</div>
</body>
</html>