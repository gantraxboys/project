<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Produk</h1>
    <?php
        echo"isi data dibawah ini :"
    ?>
</body>
    <form action="<?php echo$_SERVER['latihan2.new.php'];?>"method="post">
    <pre>
        Type Produk*     :<input type="text" name="type produk">
        Produk*          :<input type="text" name="produk">
        Cust Produk Code*:<textarea name="alamat" rows="5" cols="40"></textarea>
        Unit*            : <input type="text" value="*Please select a Unit*">
        Tanggal Lahir   : <input type="date" value="Tanggal_lahir">
        Jenis Kelamin   : <input type="radio" name="jenis_kelamin"value=laki-laki>laki-laki 
                          <input type="radio" name="jenis_kelamin"value=Perempuan>Perempuan
                          <input type="submit" value="submit">
        Pendidikan      : <select name="Pendidikan">
                          <option value="pilih">
                          <option value="S1">S1
                          <option value="SMA">SMA
                          <option value="SMP">SMP
                          <option value="SD">SD
</select>
        <input type="submit"value="Tampil"><input type="reset"value="Batal">
</form>
</body>
</html>