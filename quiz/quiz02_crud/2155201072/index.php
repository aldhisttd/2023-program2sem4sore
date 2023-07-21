<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>quiz02</title>
</head>
<body>
  <?php include "componen/menu.php" ?>

  <form action="proses/ex_buku.php" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Isbn</td>
        <td>:</td>
        <td><input type="text" name="isbn"></td>
      </tr>
      <tr>
        <td>Judul</td>
        <td>:</td>
        <td><input type="text" name="judul"></td>
      </tr>
      <tr>
        <td>Kategori</td>
        <td>:</td>
        <td><select name="kategori" id="">
          <option value="novel">Novel</option>
          <option value="komik">Komik</option>
          <option value="kamus">Kamus</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Stok</td>
        <td>:</td>
        <td><input type="number" name="stok"></td>
      </tr>
      <tr>
        <td>file ebook</td>
        <td>:</td>
        <td><input type="file" name="file_ebook"></td>
      </tr>
      <tr>
        <td><button type="submit" name="btn-submit">Simpan</button></td>
      </tr>
    </table>
  </form>
</body>
</html>