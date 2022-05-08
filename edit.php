<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
 
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
 
input[type=submit]:hover {
  background-color: #45a049;
}
 
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<head>
  <title>DATA MAHASISWA HADIR</title>
</head>
<body>
  <a href="login.php">LOGOUT</a>
 <center> <h2>DATA MAHASISWA </h2>
  <br/>
  <a href="form.php">KEMBALI</a>
  <br/>
  <br/>
  <h3>TAMBAH DATA MAHASISWA</h3>
  </center>
  <?php
  include 'koneksi.php';
  $id = $_GET['id'];
  $data = mysqli_query($koneksi,"select * from input where id='$id'");
  while($d = mysqli_fetch_array($data)){
    
    ?>

  <form method="post" action="update.php">
 <div>
 <form method="post" action="aksi.php">
    <td><label for="fname">NAMA ANDA</label>
    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
    <input type="text" id="NAMA" name="NAMA"  value="<?php echo $d['NAMA']; ?>">
  </td>
 
    <label for="lname">NIM</label>
    <td><input type="text" id="NIM" name="NIM" value="<?php echo $d['NIM']; ?>"></td>
 
    <label for="country">KELAS</label>
    <select id="KELAS" name="KELAS" value="<?php echo $d['alamat']; ?>">
      <option value="MI-2021-KIP-P1">MI-2021-KIP-P1</option>
      <option value="MI-2021-KIP-P2">MI-2021-KIP-P2</option>
      <option value="MI-2021-KIP-P3">MI-2021-KIP-P3</option>
    <option value="MI-2021-KIP-P4">MI-2021-KIP-P4</option>
    <option value="MI-2021-KIP-P">MI-2021-KIP-P</option>
    </select>
 
    <input type="submit" value="Kirim">;
  </form>

</div>

  </form>
    <?php 
  }
  ?>

</body>
</html>