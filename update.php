<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NAMA = $_POST['NAMA'];
$NIM= $_POST['NIM'];
$KELAS = $_POST['KELAS'];

 
// update data ke database
mysqli_query($koneksi,"update input set NAMA='$NAMA', NIM='$NIM',KELAS='$KELAS' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:form.php");
 
?>