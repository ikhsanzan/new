<?php


include_once '../core/core.php';

require '../vendor/autoload.php';
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
$dataproduk = query("SELECT * FROM `users` where level = 'admin'");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IM Parfum </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../asset/style.css">
    <link rel="stylesheet" type="text/css" href="../asset/icons/font/flaticon.css">
    <style>
    body {
        background-color: #f2f2f2;
    }

    td.no-border-right {
        border-left: none;
        margin-right: 4px;
    }

    .container-fluid.mt-4 {
        background-color: #f2f2f2;
    }
</style>
</head>


<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php">IM Parfum</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Menu Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Keluar</a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Content -->
    <h4 class="display-5 pt-4 text-center" style="font-family: 'Open Sans', sans-serif; font-weight: bold;"> Halaman Data Admin</h4>

    <div class="container-fluid mt-4">
    
        <form action="" method="post">
            <input name="keyword" id="keyword" autofocus autocomplete="off" class="form-control mb-3" type="text" placeholder="Cari Data Produk">
        </form>
        <a href="tambah-data-admin.php" >
        <button type="button" class="btn btn-primary mb-3 ">Tambah Data Admin</button>
        </a>
        <div class="table-responsive">
            <div id="container">
                <table class="table table-bordered">
                    <tr>
                        <td align="center">No. </td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td> Alamat </td>
                        <td>No. HP</td>
                        <!-- <td colspan="3" style="text-align: center;">Aksi</td> -->

                    </tr>

                    <?php $i = 1; ?>
                    <?php foreach ($dataproduk as $produk) : ?>
                        <tr>
                            <td align="center"> <?= $i ?></td>
                            <td><?= $produk["username"]; ?></td>
                            <td><?= $produk["email"]; ?></td>
                            <td><?= $produk["alamat"]; ?> </td>
                            <td> <?= $produk["no_hp"]; ?></td>
                                <!-- <td class="no-border-right" style="text-align: center; border-right: none;">
                                    <a href="edit-data-admin.php?id=<?= $produk["id"] ?>" class="mr-2">Ubah</a>
                                </td>
                                <td class="no-border-right">
                                    <a href="hapus-data-pengguna.php?id=<?= $produk["id"] ?> " onclick="return confirm('Apakah Data Ingin Dihapus?');">Hapus</a>
                                </td> -->
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/data-admin.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>