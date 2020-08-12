<?php
session_start();
include '../core/core.php';
// include '../function/cek_login.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IM Parfum </title>
    <link rel="stylesheet" href="../asset/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            /* font-family: Arial, Helvetica, sans-serif; */
            /* background-color: #59595F; */
            background-color: #f2f2f2;
        }

        .hero-image {

            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://images.pexels.com/photos/3785784/pexels-photo-3785784.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            position: relative;
            background-size: cover;
            overflow: hidden;
            height: 600px;
            background-repeat: no-repeat;
            background-position: center;

        }

        .hero-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            overflow: hidden;
            text-align: center;
            color: white;
        }

        .hero-container h1 {
            font-size: 53px;
            letter-spacing: 0.2em;
            margin: 0;
            font-family: 'Muli';
        }

        .hero-container h1 span {
            font-size: 33px;
            padding: 6px 14px;
            display: inline-block;
            font-family: 'Muli';
        }

        .des {
            display: block;
            font-size: 35px;
            font-family: 'Muli';
        }

        .hero-container button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 10px 25px;
            color: black;
            background-color: #ddd;
            text-align: center;
            cursor: pointer;
            font-family: 'Muli';
        }

        .hero-container button:hover {
            background-color: #555;
            color: white;
            font-size: 20px;
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
                    <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span id="cart-item" class="badge badge-danger"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Keluar</a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Hero Content Main -->
    <!-- <div class="hero-image">
        <div class="hero-text">
            <h1>I am Parfum</h1>
            <p>Temukan Parfum Terbaik Anda Disini</p>
            <a href="#targetname"><button>Belanja Sekarang</button></a>
        </div>
    </div> -->

    <div class="hero-image">
        <div class="container hero-container">
            <h1><span>I am Parfum</span></h1>
            <p class="des">Temukan Parfum Terbaik Anda Disini</p>
            <a href="#targetname">
                <button type="button" class="btn  btn-lg">Belanja Sekarang</button>
            </a>
        </div>
    </div>

    <!-- Content -->
    <div class="container pt-4">
        <div id="message"></div>
        <a name="targetname"></a>
        <div class="row">
            <?php $i = 1; ?>
            <?php
            include '../config.php';
            $stmt = $conn->prepare("select * from product");
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) :
            ?>
                <div class="col-md-4 pb-4">
                    <div class="card pb-2">
                        <img src="<?= $base_url ?>admin/upload/<?= $row['product_image'] ?>" class="card-img-top p-2" height="300px" width="300px">
                        <div class="card-body">
                            <h4 class="card-title text-center ">
                                <?= $row['product_name']; ?>
                            </h4>
                            <h5 class="card-text text-center text-danger ">Rp
                                <?= number_format($row['product_price'], 2) ?>/-
                            </h5>
                            <h6 class="card-text text-center ">
                                <?= $row['product_weight'] ?>
                            </h6>
                        </div>
                        <div class="card-footer p-1">
                            <form action="" method="post" class="form-submit">
                                <input type="hidden" class="iduser" name="" value="<?= $_SESSION['id'] ?>">
                                <input type="hidden" class="pid" name="" value="<?= $row['id'] ?>">
                                <input type="hidden" class="pname" name="" value="<?= $row['product_name'] ?>">
                                <input type="hidden" class="pprice" name="" value="<?= $row['product_price'] ?>">
                                <input type="hidden" class="pimage" name="" value="<?= $row['product_image'] ?>">
                                <input type="hidden" class="pcode" name="" value="<?= $row['product_code'] ?>">

                                <button class="btn btn-info btn-block addItemBtn" >
                                    <i class="fas fa-cart-plus"></i> &nbsp;
                                    Tambah Ke Keranjang
                                </button>
                            </form>
                            <!-- <a href="action.php?id=<?= $row['id'] ?>"  ></a> -->
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endwhile; ?>
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".addItemBtn").click(function(e) {

                e.preventDefault();

                var $form = $(e.target).closest(".form-submit");

                var pid = $form.find(".pid").val();
                var pname = $form.find(".pname").val();
                var pprice = $form.find(".pprice").val();
                var pimage = $form.find(".pimage").val();
                var pcode = $form.find(".pcode").val();
                var iduser = $form.find(".iduser").val();


                $.ajax({
                    url: 'action.php',
                    method: 'post',
                    data: {
                        pid: pid,
                        pname: pname,
                        pprice: pprice,
                        pimage: pimage,
                        pcode: pcode,
                        iduser: iduser
                    },
                    success: function(response) {
                        $("#message").html(response);
                        load_cart_item_number();

                    }
                });
            });

            load_cart_item_number();

            function load_cart_item_number() {
                $.ajax({
                    url: 'action.php',
                    method: 'get',
                    data: {
                        cartItem: "cart_item"
                    },
                    success: function(response) {
                        $("#cart-item").html(response);
                    }
                });
            }
        });
    </script>
</body>

</html>