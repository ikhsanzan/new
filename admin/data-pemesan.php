<?php


include_once '../core/core.php';
include '../function/produk_function.php';
require '../vendor/autoload.php';

if (isset($_GET['tanggal']) && isset($_GET['bulan']) && isset($_GET['tahun'])) {
    $tanggal = "{$_GET['tahun']}-{$_GET['bulan']}-{$_GET['tanggal']} ";
    $dataproduk = query("SELECT * FROM `orders` WHERE time LIKE '%$tanggal%'");
} else {
    $dataproduk = query("SELECT * FROM `orders` ORDER BY TIME DESC");
}


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
</head>
<style>
    body {
        background-color: #f2f2f2;
    }

    .container-fluid.mt-4 {
        background-color: #f2f2f2;
    }
</style>

<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php"> IM Parfum</a>

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
    <h4 class="display-5 pt-4 text-center" style="font-family: 'Open Sans', sans-serif; font-weight: bold;"> Halaman Data Pemesanan Pelanggan</h4>

    <div class="container-fluid mt-4">
        <form action="" method="get">
            <div class="form-group">
                <div class="row pl-3">
                    <select name="tanggal" id="tanggal" class="form-control form-control-sm col-1">
                        <option value="">Tanggal</option>
                        <?php
                        for ($i = 1; $i <= 31; $i++) :
                        ?>
                            <option value="<?= str_pad($i, 2, 0, STR_PAD_LEFT) ?>"><?= str_pad($i, 2, 0, STR_PAD_LEFT) ?></option>
                        <?php endfor; ?>
                    </select>
                    <select name="bulan" id="bulan" class="form-control form-control-sm col-1 ml-3">
                        <option value="">Bulan</option>
                        <?php
                        for ($i = 1; $i <= 12; $i++) :
                        ?>
                            <option value="<?= str_pad($i, 2, 0, STR_PAD_LEFT) ?>"><?= str_pad($i, 2, 0, STR_PAD_LEFT) ?></option>
                        <?php endfor; ?>
                    </select>
                    <select name="tahun" id="tahun" class="form-control form-control-sm col-1 ml-3">
                        <option value="">Tahun</option>
                        <?php
                        for ($i = 2015; $i <= date('Y'); $i++) :
                        ?>
                            <option value="<?= str_pad($i, 2, 0, STR_PAD_LEFT) ?>"><?= str_pad($i, 2, 0, STR_PAD_LEFT) ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="row pl-3">
                    <button class="btn btn-primary mt-2 col-1" type="submit">Cari</button>
                </div>
            </div>
        </form>

        <form action="" method="post">
            <input name="keyword" id="keyword" autofocus autocomplete="off" class="form-control mb-3" type="text" placeholder="Cari Data Produk">
        </form>

        <a href="cetak.php">
            <button type="button" class="btn btn-primary mb-3">
                <i class="fa fa-print" aria-hidden="true"></i> Cetak Laporan</button>
        </a>


        <div class="table-responsive">
            <div id="container">
                <table class="table table-bordered">
                    <tr>
                        <td>No. </td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>No. HP</td>
                        <td> Alamat </td>
                        <td>Metode Pembayaran</td>
                        <td>Produk</td>
                        <td>Total Pembayaran</td>
                        <td>Waktu Pemesanan</td>
                    </tr>

                    <?php $i = 1; ?>
                    <?php foreach ($dataproduk as $produk) : ?>
                        <tr>
                            <td> <?= $i ?></td>
                            <td><?= $produk["name"]; ?></td>
                            <td><?= $produk["email"]; ?></td>
                            <td><?= $produk["phone"]; ?></td>
                            <td><?= $produk["address"]; ?> </td>
                            <td> <?= $produk["pmode"]; ?></td>
                            <td><?= $produk["products"]; ?></td>
                            <td><?= $produk["amount_paid"]; ?></td>
                            <td><?= $produk["time"]; ?></td>

                        </tr>

                        <?php $i++; ?>
                    <?php endforeach; ?>
                </table>

            </div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/data-pemesan.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>