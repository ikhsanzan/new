<?php 

// $ds = DIRECTORY_SEPARATOR;
// $base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
// require_once("{$base_dir}core{$ds}core.php");

// require_once(__DIR__."core/core.php");
// require_once $_SERVER['DOCUMENT_ROOT'].'core/core.php';



include_once '../core/koneksi.php';
include_once '../function/register.php';

if(isset ($_POST["register"])){

    if(registrasi($_POST)> 0){
         echo "<script type=\"text/javascript\">".
        "alert('Data Berhasil Ditambahkan');".
        "</script>";
        header("location:data-pengguna.php");

    }else{
        echo mysqli_error($conn);
        echo "Gagal Menambahkan Data";
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <title>Halaman Tambah Data Pengguna</title>
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
                    <a class="nav-link active" href="index.php">Menu Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php">Keluar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="col-lg-6">
        <div class="card profile">
            <div class="card-header">Form Tambah Data Pengguna</div>
            <div class="card-body card-block">

                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Nama (Username)</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Nama" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group" id="show_hide_password">
                            <input type="password" name="password" data-toggle="password" placeholder="Masukkan Password" id="password" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-eye"></i></span>
                            </div>
                        </div>
                        <!-- <input type="password" class="form-control" name="password"  id="password" placeholder="Masukkan Password"> -->
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email" >
                    </div>
          
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" >
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="number" name="no_hp" class="form-control" id="no_hp" id="no_hp" placeholder="Masukkan Nomor HP" >
                    </div>
                    <input type="hidden" name="level" value="user">
                    <button type="submit" name="register" class="btn btn-primary form-control">Tambahkan Data</button>
                </form>

            </div>

        </div>
    </div>

    <script>
        window.onload = function() {

            ! function(a) {
                a(function() {
                    a('[data-toggle="password"]').each(function() {
                        var b = a(this);
                        var c = a(this).parent().find(".input-group-text");
                        c.css("cursor", "pointer").addClass("input-password-hide");
                        c.on("click", function() {
                            if (c.hasClass("input-password-hide")) {
                                c.removeClass("input-password-hide").addClass("input-password-show");
                                c.find(".fa").removeClass("fa-eye").addClass("fa-eye-slash");
                                b.attr("type", "text")
                            } else {
                                c.removeClass("input-password-show").addClass("input-password-hide");
                                c.find(".fa").removeClass("fa-eye-slash").addClass("fa-eye");
                                b.attr("type", "password")
                            }
                        })
                    })
                })
            }(window.jQuery);
        }
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>