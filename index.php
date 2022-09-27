<?php
include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Produk PKK</title>
</head>
<body>
    <nav>
    <div>
        <h3>Web Rakgh Food</h3>
        </div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Produk</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        </nav>
    </table>
    <hr>
    <h3>Kelompok</h3>
    </table>
    <table border="1">
        <th>Poto</th>
        <th>Identitas</th>
<?php foreach( $data as $d ) : ?>
              <tr>
                <td> <img src="<?= $d["foto"]; ?>" width="50">
                <td> <?= $d["identitas"]; ?></td>
                  </td>
                </tr>
<?php endforeach; ?>
 </html>