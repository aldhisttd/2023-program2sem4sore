<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Software</title>
</head>

<body>

  <?php include "proses/menu.php" ?>

  <form action="proses/ex_software.php" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Sn</td>
        <td>:</td>
        <td><input type="text" name="sn" required></td>
      </tr>
      <tr>
        <td>Tanggal Rilis</td>
        <td>:</td>
        <td><input type="date" name="tgl" required></td>
      </tr>
      <tr>
        <td>Jenis</td>
        <td>:</td>
        <td><select name="jenis" id="" required>
            <option value="Editing">Editing</option>
            <option value="Coding">Gaming</option>
            <option value="Tools">Tools</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Quantity</td>
        <td>:</td>
        <td><input type="number" name="quantity" required></td>
      </tr>
      <tr>
        <td>Spesifikasi</td>
        <td>:</td>
        <td><textarea name="spesifikasi" rows="4" cols="50" required></textarea>
      </tr>
      <tr>
        <td>Gambar</td>
        <td>:</td>
        <td><input type="file" name="gambar" required></td>
      </tr>
      <tr>

        <td><button type="submit" name="simpan">Simpan</button></td>

      </tr>
    </table>

  </form>

</body>

</html>