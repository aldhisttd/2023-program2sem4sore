<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>laptop</title>
</head>

<body>

  <?php include "proses/menu.php" ?>

  <form action="proses/ex_laptop.php" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Kode</td>
        <td>:</td>
        <td><input type="text" name="kode"></td>
      </tr>
      <tr>
        <td>Tanggal Masuk</td>
        <td>:</td>
        <td><input type="date" name="tgl"></td>
      </tr>
      <tr>
        <td>Jenis</td>
        <td>:</td>
        <td><select name="jenis" id="">
            <option value="office">Office</option>
            <option value="gaming">Gaming</option>
            <option value="contentcreator">Content Creator</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Quantity</td>
        <td>:</td>
        <td><input type="number" name="quantity"></td>
      </tr>
      <tr>
        <td>Spesifikasi</td>
        <td>:</td>
        <td><textarea name="spesifikasi" rows="4" cols="50"></textarea>
      </tr>
      <tr>
        <td>Gambar</td>
        <td>:</td>
        <td><input type="file" name="gambar"></td>
      </tr>
      <tr>

        <td><button type="submit" name="simpan">Simpan</button></td>

      </tr>
    </table>

  </form>

</body>

</html>