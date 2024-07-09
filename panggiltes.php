<center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nim = $_POST["nim"];
  $nama = $_POST["nama"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $tanggal_lahir = $_POST["tanggal_lahir"];
  $tempat_lahir = $_POST["tempat_lahir"];
  $jurusan = $_POST["jurusan"];
  $tahun_masuk = $_POST["tahun_masuk"];

  echo "Nim: $nim<br>";
  echo "Nama: $nama<br>";
  echo "Jenis Kelamin: $jenis_kelamin<br>";
  echo "Tanggal Lahir: $tanggal_lahir<br>";
  echo "Tempat Lahir: $tempat_lahir<br>";
  echo "Jurusan: $jurusan<br>";
  echo "Tahun Masuk: $tahun_masuk<br>";
}
?>
</center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
</form>