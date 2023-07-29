<?php
include "koneksi.php";
$sn = $_GET['sn'];

$pilih = mysqli_query($conn, "SELECT * FROM software WHERE sn='$sn'");
$row = mysqli_fetch_assoc($pilih);

if (isset($_POST['edit'])) {
    $tgl_rilis = $_POST['tanggal_rilis'];
    $jenis = $_POST['jenis'];
    $quan = $_POST['quantity'];
    $spek = $_POST['spesifikasi'];

    if ($_FILES['gambar']['name'] != "") {
        // ambil nama gambar lama
        $q = mysqli_query($conn, "SELECT gambar FROM software WHERE sn='$sn'");
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
        mysqli_query($conn, "UPDATE software SET gambar='$gambarBaru' WHERE sn='$sn'");
    }
    mysqli_query($conn, "UPDATE software SET tanggal_rilis='$tgl_rilis', jenis='$jenis', quantity='$quan', spesifikasi='$spek' WHERE sn='$sn'");
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
                <td><label for="sn">SN</label></td>
                <td>:</td>
                <td><input value="<?php echo $row['sn']; ?>" type="text" name="sn" id="sn" readonly></td>
            </tr>
            <tr>
                <td><label for="tanggal_rilis">Tanggal Rilis</label> </td>
                <td>:</td>
                <td><input value="<?php echo $row['tanggal_rilis']; ?>" type="date" name="tanggal_rilis" id="tanggal_rilis" required></td>
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