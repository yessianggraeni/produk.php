<?php
include('latihan2.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk PKK</title>
</head>
<body>
    <table width="100%">
        <tr>
        <td><a href="index.php">PKK</a></td>
        <td align="right"><a href="produk.html">Produk</a><td>
        </tr>
    </table>
    <hr>
    <h3>Kelompok</h3>
    </table>
    <table border="1">
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>poto</th>
<?php foreach( $data as $d ) : ?>
              <tr>
                <td> <?= $d["nama"]; ?></td>
                <td> <?= $d["alamat"]; ?></td>
                <td> <?= $d["tgl"]; ?></td>
                                  <td>
                      <img src="<?= $d["foto"]; ?>" width="50">
                  </td>
                </tr>
<?php endforeach; ?>
 </html>