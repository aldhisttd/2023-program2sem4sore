<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>perbaikan</title>
</head>
<body>
  <?php include "componen/menu.php" ?>

  <form action="proses/ex_software.php" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td>sn</td>
        <td>:</td>
        <td><input type="text" name="sn"></td>
      </tr>
      <tr>
        <td>tanggal_rilis</td>
        <td>:</td>
        <td><input type="date" name="tanggal_rilis"></td>
      </tr>
      <tr>
        <td>jenis</td>
        <td>:</td>
        <td><select name="jenis" id="">
          <option value="editing">editing</option>
          <option value="coding">coding</option>
          <option value="tools">tools</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>quantity</td>
        <td>:</td>
        <td><input type="number" name="quantity"></td>
      </tr>
      <tr>
      <tr>
        <td>spesifikasi</td>
        <td>:</td>
        <td><input type="text" name="spesifikasi"></td>
      </tr>
      <tr>
        <td>gambar</td>
        <td>:</td>
        <td><input type="file" name="gambar"></td>
      </tr>
      <tr>
        <td><button type="submit" name="btn-submit">Simpan</button></td>
      </tr>
    </table>
  </form>
</body>
</html>