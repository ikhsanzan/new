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
    <link rel="stylesheet" href="../asset/style.css">
    <link rel="stylesheet" type="text/css" href="../asset/icon/font/flaticon.css">

    <link rel="stylesheet" type="text/css" href="../asset/icons/font/flaticon.css">
    
</head>
<style>
    body {
        background-color: #f2f2f2;
    }
</style>

<body>

    <!-- Navbar -->
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
                    <a class="nav-link" href="logout.php">Keluar</a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="social-box">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-12 text-center">
                </div>
                
                <div class="col-sm-4 col-xs-12 text-center btn">
                    <a href="dataproduk.php">
                        <div class="box">
                            <div class="icons">
                                <span class="flaticon-box icon" id="flat"></span>
                            </div>
                            <div class="box-title">
                                <h4>Data Produk</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-4 col-xs-12 text-center btn">
                    <a href="data-pemesan.php">
                        <div class="box">
                            <div class="icons">
                                <span class="flaticon-database" id="flat"></span>
                            </div>
                            <div class="box-title lain">
                                <h4>
                                    Data Pemesanan
                                </h4>


                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-2 col-xs-12 text-center">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                 <div class="col-sm-4 col-xs-12 text-center">
                </div>
               
                
                <div class="col-sm-4 col-xs-12  text-center btn">
                    <a href="data-pengguna.php">
                        <div class="box">
                            <!-- <i class='fas fa-baby' style='font-size:48px'></i> -->
                            <div class="icons">
                                <span class="flaticon-group"></span>
                            </div>
                            <div class="box-title">
                                <h4>Data Pelanggan</h4>
                            </div>
                        </div>
                    </a>
                </div>
               
                
                <div class="col-sm-4 col-xs-12 text-center">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                 <div class="col-sm-2 col-xs-12 text-center">
                </div>
               
                <div class="col-sm-4 col-xs-12  text-center btn">
                    <a href="data-admin.php">
                        <div class="box">
                            <!-- <i class='fas fa-baby' style='font-size:48px'></i> -->
                            <div class="icons">
                            <span class="flaticon-user-2">
                            </span>
                            </div>
                            <div class="box-title">
                                <h4>Data Admin</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-12  text-center btn">
                    <a href="profil-admin.php">
                        <div class="box">
                            <!-- <i class='fas fa-baby' style='font-size:48px'></i> -->
                            <div class="icons">
                                <span class="flaticon-user-1"></span>
                            </div>
                            <div class="box-title">
                                <h4>Edit Profile</h4>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-sm-2 col-xs-12 text-center">
                </div>
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