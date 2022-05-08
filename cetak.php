<html>
<head>
  <title>CRUD PHP dan MySQLi - MANAJEMEN INFORMATIKA STMIK IKMI</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <br/
  <tr><center><h2>LAPORAN DATA MAHASISWA</h2></center></tr>
  <br/>
  <center>
  
  <br/>
  
  
  <table border="1">
    <table class="table1">
    <tr>
      <th>NO</th>
      <th>NAMA</th>
      <th>NIM</th>
      <th>KELAS</th>
    
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
       
      </tr>

      <?php 
    }
    ?>
  </table>
  <br/>
 <script>
		window.print();
	</script>
</center>
</body>
</html>