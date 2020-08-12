<?php
session_start();
// include 'core/core.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="asset/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Halaman Login</title>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }


        .login-form,
        button {
            font-family: Raleway, sans-serif;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }
    </style>
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
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <!-- <div class="container">
        <div class="col-lg-6 ">
            <div class="card profile">
                <div class="card-header">
                    Form Login</div>
                <div class="card-body">

                    <div class="col-md-12 justify-content-center ">
                        <form method="post" action="function/cek_login.php">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" name="password" data-toggle="password" placeholder="Masukkan Password" id="password" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-eye"></i></span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Login</button>
                        </form>
                    </div>
                    <div class="col-md-4 justify-content-center">
                    </div>
                </div>

            </div>
        </div>
    </div> -->


    <!-- <div class="container-fluid mt-5 d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row  no-gutters d-flex justify-content-center" style="width: 500px;">
                <div class="col-md-12 ">
                    <div class="card-header">Form Login</div>
                    <div class="card-body">
                        <div class="col-md-12 justify-content-center ">
                            <form method="post" action="function/cek_login.php">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password" name="password" data-toggle="password" placeholder="Masukkan Password" id="password" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-eye"></i></span>
                                        </div>
                                    </div>
                                    <input type="password" class="form-control" name="password"  id="password" placeholder="Masukkan Password">
                                </div>
                                <button type="submit" class="btn btn-primary form-control">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="container p-5">
        <h1 class="display-4 text-center">
            Halaman Login
        </h1>
        <form method="post" action="function/cek_login.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group" id="show_hide_password">
                    <input type="password" name="password" data-toggle="password" placeholder="Masukkan Password" id="password" class="form-control">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-eye"></i></span>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary form-control">Login</button>
        </form>
    </div> -->

    <!-- FIX -->
    <main class="login-form mt-4">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">Form Login</div>
                        <div class="card-body">
                            <form method="post" action="function/cek_login.php">

                                <div class="form-group row mt-4">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                    <div class="col-md-6">
                                        <input type="text" id="username" class="form-control" name="username" placeholder="Masukkan Username" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <!-- <div class="input-group" id="show_hide_password"> -->
                                        <div class="col-md-6 input-group" id="show_hide_password">
                                            <input type="password" id="password" class="form-control" name="password"  data-toggle="password" placeholder="Masukkan Password" required>
                                            <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-eye"></i></span>
                                    </div>
                                        </div>
                                    <!-- </div> -->

                                </div>



                                <div class="col-md-6 offset-md-4 mt-4 mb-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>

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