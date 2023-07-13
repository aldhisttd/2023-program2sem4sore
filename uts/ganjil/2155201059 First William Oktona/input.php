<!DOCTYPE html>
<html>
<head>
 <title>Form Input Data</title>
</head>
<body>
 <form action="prosesSimpan.php" method="post">
  id:
  <input type="text" name="nim"><br>
  Nama:
  <input type="text" name="nama"><br>
  Alamat:
  <textarea name="alamat"></textarea><br>
  Tanggal Lahir:
  <input type="datetime-local"><br>
  photo:
  <input type="file" name="foto"><br>
  <input type="submit" value="Simpan"> <input type="reset" value="Reset">
 </form>
</body>
</html>
