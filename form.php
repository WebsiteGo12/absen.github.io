<html>
<head>
  <title>CRUD PHP dan MySQLi - MANAJEMEN INFORMATIKA STMIK IKMI</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <a href="login.php">LOGOUT</a>
 <br/
  <tr><center><h2>TABEL SISWA</h2></center></tr>
  <br/>
  <center>
  <a href="input.php">+ TAMBAH MAHASISWA</a>
  <br/>
  <br/>
  
  <table border="1">
    <table class="table1">
    <tr>
      <th>NO</th>
      <th>NAMA</th>
      <th>NIM</th>
      <th>KELAS</th>
      <th>OPSI</th>
    </tr>
    <?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from input");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>

        <td><?php echo $d['NAMA']; ?></td>
        <td><?php echo $d['NIM']; ?></td>
        <td><?php echo $d['KELAS']; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
          <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
        </td>
      </tr>

      <?php 
    }
    ?>
  </table>
  <br/>
  <a href="cetak.php" target="_blank">CETAK</a>
</center>
</body>
</html>