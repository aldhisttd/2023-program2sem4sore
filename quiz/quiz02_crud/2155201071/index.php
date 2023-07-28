<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>quiz02</title>
</head>
<body>
  <?php include "componen/menu.php" ?>

  <form action="proses/ex_pembayaran.php" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Nomor_tagihan</td>
        <td>:</td>
        <td><input type="text" name="nomor_tagihan"></td>
      </tr>
      <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td><input type="text" name="tanggal"></td>
      </tr>
      <tr>
        <td>Jenis_tagihan</td>
        <td>:</td>
        <td><select name="jenis_tagihan" id="">
          <option value="listrik">listrik</option>
          <option value="internet">internet</option>
          <option value="pajak">pajak</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Nominal</td>
        <td>:</td>
        <td><input type="number" name="nominal"></td>
      </tr>
      <tr>
        <td>bukti_transfer</td>
        <td>:</td>
        <td><input type="file" name="bukti_transfer"></td>
      </tr>
      <tr>
        <td><button type="submit" name="btn-submit">Simpan</button></td>
      </tr>
    </table>
  </form>
</body>
</html>