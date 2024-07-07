<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="outputpengusaha.php" method="post">
    <h2> Registrasi </h2>
    <label for="username">Nama:</label><br>
    <input type="text" id="username" name="nama" required><br>
    <label for="tanggal_lahir">Tanggal Lahir:</label><br>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>
      Supplier:
    <select name="pengusaha">
        <option value="-pilih-">
        <option value="perdagangan">perdagangan
        <option value="pariwisata">pariwisata
        <option value="perkantoran">perkantoran
        <option value="lain-lain">Lain-lain           
</select>        
<br>
      Kebutuhan:
    <select name="barang">
        <option value="pilih">
        <option value="modal">modal
        <option value="transportasi">transpotasi
        <option value="jas">jas      
</select>
<br>

<laber for="jenis_kelamin">Jenis Kelamin:</label><br>
<input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki_Laki" required>
<label for="laki_laki">Laki_Laki</label><br>
<input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" required>
<label for="perempuan">Perempuan</label><br>
<label for="nama">note:</label><br>
<input type="text" id="note" name="note" required><br>
<input type="submit" value="Submit">
<input type="reset" value="Cancel">
</form>
</body>
</html>