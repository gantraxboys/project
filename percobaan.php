<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="panggiltes.php" method="post">
  <h2>Tambahkan Data Rak</h2>
  <label for="nim">Nim:</label><br>
  <input type="text" id="nim" name="nim" required><br>
  <label for="Nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" required><br>
  <label for="jenis_kelamin">Jenis Kelamin:</label><br>
  <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-Laki" required>
  <label for="laki_laki">Laki-Laki</label>
  <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
  <label for="perempuan">Perempuan</label><br>
  <label for="tanggal_lahir">Tanggal Lahir:</label><br>
  <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>
  <label for="tempat_lahir">Tempat Lahir:</label><br>
  <input type="text" id="tempat_lahir" name="tempat_lahir" required><br>
  <label for="jurusan">Jurusan:</label><br>
  <select name="jurusan">
<option value="sistem_informasi">Sistem Informasi
    <option value="manajemen">Manajemen
</select>
<br>
  <label for="tahun_masuk">Tahun Masuk:</label><br>
  <select name="tahun_masuk">
    <option value="2002">2002
    <option value="2003">2003
    <option value="2004">2004
</select>
<br>
<p>
  <input type="submit" value="Submit">
</form>
</body>
</html>