<?php
include "koneksi.php";
$kode = $_GET['kode'];

$pilih = mysqli_query($conn, "SELECT * FROM laptop WHERE kode='$kode'");
$row = mysqli_fetch_assoc($pilih);

if (isset($_POST['edit'])) {
    $tgl_msk = $_POST['tanggal_masuk'];
    $jenis = $_POST['jenis'];
    $quan = $_POST['quantity'];
    $spek = $_POST['spesifikasi'];

    if ($_FILES['gambar']['name'] != "") {
        // ambil nama gambar lama
        $q = mysqli_query($conn, "SELECT gambar FROM laptop WHERE kode='$kode'");
        $ary = mysqli_fetch_array($q);
        $gambarLama = $ary['gambar'];
        // hapus gambar lama
        unlink("img/" . $gambarLama);
        // upload gambar baru
        $gambar = basename($_FILES["gambar"]["name"]);
        $target_file = "img/" . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
        // update nama gambar ke gambar baru
        $gambarBaru = $_FILES["gambar"]["name"];
        mysqli_query($conn, "UPDATE laptop SET gambar='$gambarBaru' WHERE kode='$kode'");
    }
    mysqli_query($conn, "UPDATE laptop SET tanggal_masuk='$tgl_msk', jenis='$jenis', quantity='$quan', spesifikasi='$spek' WHERE kode='$kode'");
    header('location:data.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <h1>Edit Data</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="kode">Kode</label></td>
                <td>:</td>
                <td><input value="<?php echo $row['kode']; ?>" type="text" name="kode" id="kode" readonly></td>
            </tr>
            <tr>
                <td><label for="tanggal_masuk">Tanggal Masuk</label> </td>
                <td>:</td>
                <td><input value="<?php echo $row['tanggal_masuk']; ?>" type="date" name="tanggal_masuk" id="tanggal_masuk" required></td>
            </tr>
            <tr>
                <td><label for="jenis">Jenis</label></td>
                <td>:</td>
                <td>
                    <select name="jenis" id="jenis" required>
                        <option value="office" <?php if ($row['jenis'] == 'office') {
                                                    echo 'selected="selected"';
                                                } ?>>Office</option>
                        <option value="gaming" <?php if ($row['jenis'] == 'gaming') {
                                                    echo 'selected="selected"';
                                                } ?>>Gaming</option>
                        <option value="content creator" <?php if ($row['jenis'] == 'content creator') {
                                                            echo 'selected="selected"';
                                                        } ?>>Content Creator</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="quantity">Quantity</label></td>
                <td>:</td>
                <td><input value="<?php echo $row['quantity']; ?>" type="number" name="quantity" required></td>
            </tr>
            <tr>
                <td><label for="spesifikasi">Spesifikasi</label></td>
                <td>:</td>
                <td><textarea name="spesifikasi" id="spesifikasi" cols="30" rows="10" style="resize:none;"><?php echo $row['spesifikasi']; ?>"</textarea></td>
            </tr>
            <tr>
                <td><label>file</label></td>
                <td>:</td>
                <td><input type="file" name="gambar"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="edit">Edit</button></td>
            </tr>
        </table>
    </form>

</body>

</html>