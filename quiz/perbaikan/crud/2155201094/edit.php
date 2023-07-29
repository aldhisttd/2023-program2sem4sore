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

    <?php
    include "proses/koneksi.php";
    $kode = $_REQUEST['kode'];
    $q = mysqli_query($koneksi, "SELECT * FROM software WHERE sn='$kode'");
    $ary = mysqli_fetch_array($q);
    ?>
    
    <form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">

    <table>
            <tr>
                <td>Masukkan SN</td>
                <td>:</td>
                <td>
                <input type="text" value="<?php echo $ary['sn'] ?>" readonly name="fsn">
                </td>
            </tr>
            <tr>
                <td>Masukkan Tanggal Rilis</td>
                <td>:</td>
                <td>
                <input type="date" name="ftanggal" value="<?php echo $ary['tanggal_rilis'] ?>">
                </td>
            </tr>
            <tr>
                <td>Masukkan Jenis</td>
                <td>:</td>
                <td>
                <select name="fjenis" id="">
            <option value="editing" <?php if($ary['jenis']=='editing'){echo 'selected="selected"';} ?>>Editing</option>
            <option value="coding" <?php if($ary['jenis']=='coding'){echo 'selected="selected"';} ?>>Coding</option>
            <option value="tools" <?php if($ary['jenis']=='tools'){echo 'selected="selected"';} ?>>Tools</option>
        </select>
                </td>
            </tr>
            <tr>
                <td>Masukkan Quantity</td>
                <td>:</td>
                <td>
                <input type="number" name="fquantity" value="<?php echo $ary['quantity'] ?>">
                </td>
            </tr>
            <tr>
                <td>Masukkan Spesifikasi</td>
                <td>:</td>
                <td>
                <textarea name="fspesifikasi" cols="20" rows="3"><?php echo $ary['spesifikasi'] ?></textarea>
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