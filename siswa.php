<?php

    require "user.php";

    $role = check($_POST["username"], $_POST["password"], $login);

    function check($username, $password, $array) {
        foreach ($array as $key => $value) {
            if ($username == $value["username"] && $password == $value["password"]) {
                return $value["role"];
            }
        }
        header("Location: login.php?error");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if($role == "siswa") {
            echo ("Data Siswa (siswa)");
        } else if($role == "admin") {
            echo ("Data Siswa (admin)");
        }?>
    </title>
</head>
<body>

    <?php function siswa() { ?>
        <table width="25%">
        <tr>
            <td><h1>Data Siswa (siswa)</h1></td>
            <td align="right"><a href="login.php"><button>Logout</button></a></td>
        </tr>
    </table>
        <table border="1px" cellspacing="0px" cellpadding="5px">
            <tbody align="center">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                </tr>
                <?php foreach ($GLOBALS["pengguna"] as $key => $value) : ?>
                <tr>
                    <td><?= $value["no"] ?></td>
                    <td> <img src="img/<?= $value["foto"] ?>"></td>
                    <td><?= $value["nama"] ?></td>
                </tr>
                <?php endforeach; ?> 
            </tbody>
        </table>
    <?php } ?>

    <?php function admin() { ?>
        <table width="25%">
        <tr>
            <td><h1>Data Siswa (admin)</h1></td>
            <td align="right"><a href="login.php"><button>Logout</button></a></td>
        </tr>
    </table>
    <table border="1px" cellspacing="0px" cellpadding="5px">
        <tbody align="center">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($GLOBALS["pengguna"] as $key => $value) : ?>
            <tr>
                <td><?= $value["no"] ?></td>
                <td> <img src="img/<?= $value["foto"] ?>"></td>
                <td><?= $value["nama"] ?></td>
                <td><a href="detail.php?foto=<?= $value["foto"]; ?>&nama=<?= $value["nama"]; ?>&alamat=<?= $value["alamat"]; ?>&telepon=<?= $value["telepon"]; ?>"><button>Detail</button></a></td>
            </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
    <?php } ?>

    <?php if($role == "siswa") {
        siswa();
    } else if($role == "admin") {
        admin();
    }?>

    
</body>
</html>