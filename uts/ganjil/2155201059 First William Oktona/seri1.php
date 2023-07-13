<?php
include('koneksi.php');
 
$nim = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['alamat'];
$tgl_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['photo'];
 
$query = mysqli_query($connect, "INSERT INTO mahasiswa(nim, nama, jenis_kelamin, tanggal_lahir, alamat, jurusan) VALUES('$nim', '$nama', '$jenis_kelamin', '$tgl_lahir', '$alamat', '$jurusan')");
 
if($query){
 echo 'Data berhasil disimpan. Klik <a href="input.html">di sini</a> untuk input data kembali.';
}else{
 echo 'Data gagal diinput. Silakan coba lagi input <a href="input.html">di sini</a>';
}
 
?>