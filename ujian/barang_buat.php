<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>



    <form action="regi.php" id="box" class="margin" method="post">
        <h1 style="color: white;">Masukkan Data Barang</h1>
        <label for="name">Nama Barang: </label><br>
        <input type="name" id="name" name="namabarang" class="inputbox" placeholder="Input your Nama barang"><br>

        <label for="password">Harga Barang:</label><br>
        <input type="password" id="pass" name="harga" class="inputbox" placeholder="Input the price"><br>

        <label for="email">Stok Barang: </label><br>
        <input type="email" id="email" name="stok" class="inputbox" placeholder="Input the stock"><br>

        <center><a href="barang.php" class="link">Kembali  |</a> <input name="submit" type="submit" value="Submit" class="button"></center>
        
    </form>

    <?php
    include "konek.php";
    if (isset($_POST['submit'])) {
        // Membuat variable setiap field inputan agar kodingan lebih rapi.
        $namabarang = $_POST['namabarang'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        // Membuat Query
        $query = "INSERT INTO userlogin (namabarang, harga, stok) VALUES('$namabarang', 
    '$hraga', '$stok')";

        $result = mysqli_query($conn, $query);
    }



    ?>











</body>

</html>