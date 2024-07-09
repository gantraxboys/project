<!DOCTYPE html>
<html lang="en">
<head>
   <title<Dukumen</title>
</head>
<body>
    <h1>Masukan Identitas anda<h1>
<from action="<?php echo $_SERVER['PHP_SELF'];/>"method="post">
        <pre>
        isikan Nama     :<input type="text" name="nama">
        Isikan No Telp      :<input type="text" name="notelp">
        Isikan Alamat       :<textarea name="alamat" rows="5" cols="40"></textarea>
<input type="submit" value="TAMPIL"><input type="reset"value="Batal">
</pre>
</from>