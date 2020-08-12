<?php

include_once '../../core/core.php';
include '../../function/produk_function.php';
require '../../vendor/autoload.php';

$keyword = $_GET["keyword"];


$dataproduk = query("SELECT * FROM `product` WHERE 
product_name LIKE '%$keyword%' OR 
product_price LIKE '%$keyword%' OR 
product_image LIKE '%$keyword%' OR 
product_code LIKE '%$keyword%' OR 
product_weight LIKE '%$keyword%' OR 
product_quantity LIKE '%$keyword%'  ");



?>

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
                    <a href="hapus-produk.php?id=<?= $produk["id"] ?> " onclick="return confirm('Apakah Data Ingin Dihapus?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>