<?php
session_start();

require_once '../core/koneksi.php';
require_once '../function/data_pengguna.php';



$datauser = query("SELECT * FROM `users` where username = '$_SESSION[username]' limit 1");


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../asset/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Muli&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Halaman Profile</title>
</head>

<body>


    <!-- Header -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php">Logo IM Parfum</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="user.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Keluar</a>
                </li>
            </ul>
        </div>
    </nav>

    

    <div class="col-lg-6">
        <div class="card profile">
        <?php foreach ($datauser as $user) : ?>

            <div class="card-header">
                <div class="row">

                <div class="col-sm-6 d-flex justify-content-between ">Profile Pengguna</div>
                <div class="col-sm-6 d-flex justify-content-end">
                <a href="edit-profile.php?id=<?= $user["id"] ?>">
                <button type="button" class="btn btn-primary  btn-sm">Edit Data</button>
                </a>
                </div>
            
                </div>

            </div>
            <div class="card-body card-block">

                <form action="" method="post" class="" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $user["id"] ?>">

                    <div class="form-group">
                        <label for="username">Nama</label>
                        <input type="text" readonly value="<?= $user["username"] ?>"  class="form-control" name="username"  id="username" placeholder="Masukkan Nama" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" readonly class="form-control" value="<?= $user["email"] ?>" id="email" placeholder="Masukkan Email" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" readonly class="form-control" value="<?= $user["password"] ?>" id="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="alamat" readonly class="form-control" value="<?= $user["alamat"] ?>" id="alamat" placeholder="Masukkan Alamat" >
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="no_hp" readonly class="form-control" value="<?= $user["no_hp"] ?>" id="no_hp" placeholder="Masukkan Nomor HP" >
                    </div>
                    <!-- <div class="form-actions form-group">
                        <button type="submit" class="btn btn-secondary btn-sm form-control">Simpan</button>
                    </div> -->
                </form>
            <?php endforeach; ?>

            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>