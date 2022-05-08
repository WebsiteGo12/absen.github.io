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
  background-color:  #444;
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
  background-color: #35A9DB;
  padding: 20px;
}
</style>

<head>
  <title>CRUD PHP dan MySQLi - MANAJEMEN INFORMATIKA STMIK IKMI</title>
</head>
<body>
  <a href="login.php">LOGOUT</a>
  <center><h2>DATA MAHASISWA </h2>
  <br/>
  <a href="form.php">TABEL DATA</a>
  <br/>
  <br/>
  <h3>TAMBAH DATA MAHASISWA</h3>
  </center>
  <form method="post" action="aksi.php">
 <div>
 <form method="post" action="aksi.php">
    <label for="fname">NAMA ANDA</label>
    <input type="text" id="NAMA" name="NAMA" placeholder="Nama Anda..">
 
    <label for="lname">NIM</label>
    <input type="text" id="NIM" name="NIM" placeholder="Masukan NIM.">
 
    <label for="country">KELAS</label>
    <select id="KELAS" name="KELAS">
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
</body>
</html>