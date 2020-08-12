<?php


include_once '../core/core.php';
include '../function/produk_function.php';
require '../vendor/autoload.php';

$dataproduk = query("SELECT * FROM `product`");


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
</head>

<body>

    <!-- Header -->
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
    <div class="container-fluid mt-4">
        <div class="card">
            <h5 class="card-header" style="font-family: 'Open Sans', sans-serif; font-weight: bold;">Halaman Kelola Data Produk</h5>
            <div class="card-body">
                <!-- <div class="container"> -->
                <div class="card-title">
                    <form action="" method="post">
                        <input name="keyword" id="keyword" autofocus autocomplete="off" class="form-control mb-3" type="text" placeholder="Cari Data Produk">
                    </form> 
                    <a href="tambah-produk.php">
                        <button type="button" class="btn btn-primary mb-1 ">
                            Tambah Produk</button>
                    </a>
                </div>
                <div id="container">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Barcode Produk</th>
                                <th scope="col">Gambar Produk</th>

                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga Produk</th>
                                <th scope="col">Berat Produk</th>
                                <th scope="col">Stok Produk</th>

                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($dataproduk as $produk) : ?>
                                <tr>
                                    <th><?= $i ?></th>
                                    <td><?php
                                        $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                                        echo $generator->getBarcode($produk["product_code"] . $produk['product_name'], $generator::TYPE_CODE_128);
                                        ?></td>
                                    <td><img class="card-img-top img" src="<?= $base_url ?>admin/upload/<?= $produk['product_image'] ?>" height="350px"></td>
                                    <td><?= $produk["product_name"]  ?></td>
                                    <td><?= $produk["product_price"]  ?></td>
                                    <td><?= $produk["product_weight"]  ?></td>
                                    <td><?= $produk["product_quantity"]  ?></td>

                                    <td style="text-align: center;">
                                        <a href="edit-produk.php?id=<?= $produk["id"] ?>" class="mr-2">Ubah</a>
                                        <a href="hapus-produk.php?id=<?= $produk["id"] ?> " onclick="return confirm('Apakah Yakin Data Akan Dihapus');">Hapus</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                </div>
               
            </div>
        </div>

    </div>

    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>