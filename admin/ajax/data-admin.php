<?php

include_once '../../core/core.php';
require '../../vendor/autoload.php';

$keyword = $_GET["keyword"];
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$dataproduk = query("SELECT * FROM `users` WHERE 
(username LIKE '%$keyword%' OR 
email    LIKE '%$keyword%' OR 
alamat LIKE '%$keyword%' OR 
no_hp LIKE '%$keyword%') AND level = 'admin'  ");


?>
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