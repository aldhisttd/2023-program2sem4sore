<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php include "component/menu.php" ?>
    
    <form action="proses/ex_barang.php" method="POST" enctype="multipart/form-data">
    <table>
            <tr>
                <td>Masukkan SN</td>
                <td>:</td>
                <td>
                    <input type="text" name="fsn">
                </td>
            </tr>
            <tr>
                <td>Masukkan Tanggal Rilis</td>
                <td>:</td>
                <td>
                    <input type="date" name="ftanggal">
                </td>
            </tr>
            <tr>
                <td>Masukkan Jenis</td>
                <td>:</td>
                <td>
                <select name="fjenis" id="">
                    <option value="editing">Editing</option>
                     <option value="coding">Coding</option>
                     <option value="tools">Tools</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Masukkan Quantity</td>
                <td>:</td>
                <td>
                    <input type="number" name="fquantity">
                </td>
            </tr>
            <tr>
                <td>Masukkan Spesifikasi</td>
                <td>:</td>
                <td>
                <textarea name="fspesifikasi"  cols="20" rows="3"></textarea>
                </td>
            </tr>
            <tr>
                <td>Masukkan Gambar</td>
                <td>:</td>
                <td>
                    <input type="file" name="fgambar">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>

    </form>

</body>
</html>