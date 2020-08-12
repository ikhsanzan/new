<?php 

require_once '../core/koneksi.php';


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    
    global $conn;

    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
    $id_barcode = (htmlspecialchars(mysqli_real_escape_string($conn,$data["product_code"])));
    $generator->getBarcode($id_barcode, $generator::TYPE_CODE_128);
    // $gambar = (htmlspecialchars(mysqli_real_escape_string($conn,$data["gambar"])));
    //upload gambar
     $product_image = upload();
    if (!$product_image) {
          return false;
    }
    $nama_produk = (htmlspecialchars(mysqli_real_escape_string($conn,$data["product_name"])));
    $harga = (htmlspecialchars(mysqli_real_escape_string($conn,$data["product_price"])));
    $berat = (htmlspecialchars(mysqli_real_escape_string($conn,$data["product_weight"])));
    $stock = (htmlspecialchars(mysqli_real_escape_string($conn,$data["product_quantity"])));


    $query = "INSERT INTO `product` (`id`, `product_code`, `product_image`, `product_name`, `product_price`, `product_weight` , `product_quantity`) 
    VALUES (NULL, '$generator', '$product_image', '$nama_produk', '$harga', '$berat', '$stock' )";

    return mysqli_query($conn, $query);
    //  mysqli_affected_rows($conn);

}

function ubah($data){

    global $conn;
    $id = $data['id'];

    $username = strtolower(stripslashes( $data["username"]));
    //mysqli_real_escape_string untuk memungkinkan user masukkan pass ada tanda kutip dan di masukkan ke dtabase dgn aman
    $email = htmlspecialchars(mysqli_real_escape_string( $conn,$data["email"]));
    $password = htmlspecialchars($data["password"]);
    $password = password_hash($password, PASSWORD_BCRYPT);
    $alamat = mysqli_real_escape_string( $conn,$data["alamat"]);
    $no_hp = mysqli_real_escape_string( $conn,$data["no_hp"]);
    $level = mysqli_real_escape_string( $conn,$data["level"]);

     
    $query = "UPDATE `users` SET `username` = '$username',
     `email` = '$email',
     `password` = '$password',
     `alamat` = '$alamat',
     `level` = '$level',
    `no_hp` = '$no_hp'
     WHERE `users`.`id` = $id";
    return mysqli_query($conn, $query);

    // UPDATE `users` SET `email` = 'madi@sssm' WHERE `users`.`id` = 12;


}
function hapus($id){

    global $conn;


    $delete ="DELETE FROM `users` WHERE `users`.`id` = $id";
    return mysqli_query($conn, $delete);

}

?>