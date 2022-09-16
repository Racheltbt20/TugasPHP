<?php

require ("user.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa (siswa)</title>
</head>
<body>
    <table border="1px" cellspacing="0px" cellpadding="5px">
        <tbody align="center">
            <tr>
                <td rowspan="3"><img src="img/<?= $_GET["foto"] ?>"></td>
                <td>Nama</td>
                <td><?= $_GET["nama"] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $_GET["alamat"] ?></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><?= $_GET["telepon"] ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>