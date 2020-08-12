<?php


include_once '../core/core.php';
include '../function/produk_function.php';
require '../vendor/autoload.php';

$dataproduk = query("SELECT * FROM `orders` ORDER BY TIME DESC");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../asset/style.css">
    <link rel="stylesheet" type="text/css" href="../asset/icons/font/flaticon.css">
    <style>
        @media print and (width: 21cm) and (height: 29.7cm) {
            @page {
                margin: 3cm;
            }
        }

        /* style sheet for "letter" printing */
        @media print and (width: 8.5in) and (height: 11in) {
            @page {
                margin: 1in;
            }
        }

        /* A4 Landscape*/
        @page {
            size: A4 potrait;
            margin: 10%;
        }
        body{
            background-color: white;
        }
    </style>
</head>

<body>

    <h3 class="pt-4 text-center mb-2" style="font-family: 'Open Sans', sans-serif; font-weight: bold;"> Cetak Laporan Penjualan </h3>
    <!-- 
    <div class="container mt-4 ">
    <div class="table-responsive"> -->
    <div id="container">
        <table class="table table-bordered mt-4">
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
    <script>
        window.print();
    </script>


</body>

</html>