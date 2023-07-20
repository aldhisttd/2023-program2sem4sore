<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>crudlatihan</title>
</head>
<body>
    <?php include "componen/menu.php"  ?>

    <form action="proses/ex_barang.php" method="POST" enctype="multipart/form-data">

      <label for="">Kode Barang</label>
      <input type="text" name="kdbrg">
      <br>
     
      <label for="">Nama Barang</label>
      <input type="text" name="namabrg">
      <br>
    
      <label for="">Satuan</label>
      <select name="satuan" id="">
          <option value="kg">Kg</option>
          <option value="lusing">Lusing</option>
          <option value="box">Box</option>
      </select>
      <br>
    
      <label for="">Harga</label>
      <input type="number" name="hrg">
      <br>

      <label for="">Gambar</label>
      <input type="file" name="gbr">  
      <br><br>

      <button type="submit" name="btn-submit">Simpan</button>
    </form>
</body>
</html>