<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Genap seri 1</title>
</head>
<body>
    <?php include "fitur/menu.php"?>
    <form action="proses/ex_data.php" method="POST" enctype="multipart/form-data">

      <label for="">ID :</label>
      <input type="text" name="id">
      <br>
     
      <label for="">Nama :</label>
      <input type="text" name="nama">
      <br>
    
      <label for="">Alamat :</label><br>
      <textarea id="" name="alamat" rows="4" cols="50"></textarea>
      <br>
    
      <label for="">Tanggal Lahir :</label>
      <input type="date" name="tglhr">
      <br>

      <label for="">Photo</label>
      <input type="file" name="photo">  
      <br><br>

      <button type="submit" name="btn-submit">Simpan</button>
    </form>
</body>
</html>