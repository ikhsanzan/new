
<?php

// require_once '../core/koneksi.php';
// require_once '../function/Produk_Function.php';

include_once '../core/core.php';
include '../function/produk_function.php';



if (isset($_POST["tambah-data-produk"])) {

    if (tambah($_POST)) {
        # code...
        // echo "data berhasil di tambahkan";  
        echo "
            <script>
                alert('data berhasil di tambahkan!');
                document.location.href = 'dataproduk.php';
            </script>

        ";
    } else {
        echo mysqli_error($conn);
        echo "tes";
        die();
        echo "data gagal di tambahkan";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../asset/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Muli&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Halaman Tambah Produk</title>
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
                    <a class="nav-link" href="dataproduk.php">Daftar Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Keluar</a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Content -->

    <br>

    <div class="container">
        <div class="card">
            <h5 class="card-header">Halaman Tambah Produk</h5>
            <div class="card-body">
                <div class="container">
                    <form action="" method="post"  enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="product_code">Kode Barcode Produk	</label>
                            <input type="text" class="form-control" name="product_code" id="product_code">
                        </div>
                        <div class="form-group">
                            <label for="product_image">Gambar Produk	</label><br>
                            <input type="file" id="product_image" name="product_image">
                        </div>
                        <div class="form-group">
                            <label for="product_name">Nama Produk		</label>
                            <input type="text" class="form-control" name="product_name" id="product_name" >
                        </div>
                        <div class="form-group">
                            <label for="product_price">Harga Produk		</label>
                            <input type="number" class="form-control" name="product_price" id="product_price" >
                        </div>
                        <div class="form-group">
                            <label for="product_weight">Berat Produk		</label>
                            <input type="text" class="form-control" name="product_weight" id="product_weight" >
                        </div>
                        <div class="form-group">
                            <label for="product_quantity">Stock Produk		</label>
                            <input type="number" class="form-control" name="product_quantity" id="product_quantity" >
                        </div>
                       

                        <button type="submit" name="tambah-data-produk" class="btn btn-primary form-control">Simpan Produk</button>
                    </form>

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