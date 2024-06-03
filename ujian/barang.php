<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>Cahsiercom</header>



<a href="/barang_buat.php">Tambah</a>



<?php
include "konek.php";

$view = $conn->query("SELECT * FROM produk");

//Login,register,penjualan,gudang,pembelian
//penjual,pegudang,pembeli
//
?>
<table>
    <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>
    <?php while ($row = $view->fetch_array()) ?>
    <tr>
        <th><?php $row['$view']?></th>
       
    </td>
    </tr>
</table>















    
</body>
</html>