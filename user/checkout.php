<?php 
session_start();
require '../config.php';



    $grand_total = 0;
    $allItems = '';
    $item = array();

    $sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty,
    total_price FROM cart";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()){
        $grand_total += $row['total_price'];
        $items[] = $row['ItemQty'];
    }

    // Cek Total Harga
    $allItems  = implode(", ", $items );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
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
                    <a class="nav-link " href="user.php">Home</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Keluar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span id="cart-item" class="badge badge-danger">1</span></a>
                </li>
            </ul>
        </div>
    </nav>

<!-- Content -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 px-4 pb-4" id="order">
            <h4 class="text-center text-info p-2"> Selesaikan Pemesanan </h4>
            <div class="jumbotron p-3 mb-2 text-center">
                <h6 class="lead"><b>Produk Pesanan : </b><?= $allItems; ?></h6>
                <h6 class="lead"><b>Ongkos Pengiriman  :</b> Gratis</h6>
                <h5><b>Total Pembayaran  : </b><?= number_format($grand_total,2) ?>/-</h5>
            </div>
            <form action="" method="post" id="placeOrder">
                <input type="hidden" name="products" value="<?= $allItems; ?>">
                <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
                <div class="form-group">
                    <input type="hidden" value="<?= $_SESSION['username']; ?>" class="form-control" placeholder="Masukkan Nama" required name="id_user" id="">
                </div>
                <div class="form-group">
                    <input type="text" value="<?= $_SESSION['username']; ?>" class="form-control" placeholder="Masukkan Nama" required name="name" id="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="<?= $_SESSION['email']; ?>" placeholder="Masukkan Email" required name="email" id="">
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" value="<?= $_SESSION['no_hp']; ?>" class="form-control" placeholder="Masukkan Nomor Telepon" required  id="">
                </div>
                <div class="form-group">
                    <textarea name="address" class="form-control" value="<?= $_SESSION['alamat']; ?>" placeholder="Masukkan Alamat" cols="10" rows="3"></textarea>
                </div>
                <h6 class="text-center lead">Pilih Metode Pembayaran</h6>
                <div class="form-group">
                    <select name="pmode" class="form-control" id="" require>
                        <option value="COD" >Cash On Delivery</option>
                        <option value="Bank Transfer" >Bank Transfer</option>

                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Pesan Sekarang" class="btn btn-danger btn-block">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script  type="text/javascript">
    $(document).ready(function(){

        $("#placeOrder").submit(function(e){
            e.preventDefault();
            $.ajax({
                url : 'action.php',
                method : 'post',
                data : $('form').serialize()+"&action=order",
                success: function(response){
                    $("#order").html(response);
                }
            });
        });

        load_cart_item_number();

        function load_cart_item_number() {
                $.ajax({
                    url: 'action.php',
                    method : 'get',
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