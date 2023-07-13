<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
</head>
<body>
  <h2>Pembayaran</h2>
    <form action="proses/ex_pembayaran.php" method="POST" enctype="multipart/form-data"> 
      <label for="">nomor_tagihan</label>
      <input type="text" name="nomor_tagihan">
      <br>
      <label for="">tanggal</label>
      <input type="date" name="tanggal">
      <br>
      <label for="">jenis_tagihan</label>
      <select name="jenis_tagihan" id="">
        <option value="listrik">listrik</option>
        <option value="internet">internet</option>
        <option value="pajak">pajak</option>
      </select>
      <br>
      <label for="">nominal</label>
      <input type="number" name="nominal">
      <br>
      <label for="">bukti_transfer</label>
      <input type="file" name="bukti_transfer">
      <br><br>
      <button type="submit" name="btn-simpan">Simpan</button>
    </form>
</body>
</html>