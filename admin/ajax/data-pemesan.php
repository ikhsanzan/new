<?php

include_once '../../core/core.php';
include '../../function/produk_function.php';
require '../../vendor/autoload.php';

$keyword = $_GET["keyword"];


$dataproduk = query("SELECT * FROM `orders` WHERE 
name LIKE '%$keyword%' OR 
email LIKE '%$keyword%' OR 
phone LIKE '%$keyword%' OR 
address LIKE '%$keyword%' OR 
pmode LIKE '%$keyword%' OR 
products LIKE '%$keyword%' OR
amount_paid LIKE '%$keyword%' OR
time LIKE '%$keyword%' ORDER BY TIME DESC ");


?>
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