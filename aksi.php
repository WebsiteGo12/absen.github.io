<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$NAMA = $_POST['NAMA'];
$NIM= $_POST['NIM'];
$KELAS = $_POST['KELAS'];
echo "<h4>$KELAS</h4>";
 
// menginput data ke database
mysqli_query($koneksi,"insert into input values('','$NAMA','$NIM','$KELAS')");
 
// mengalihkan halaman kembali ke index.php
header("location:form.php");
 
?>