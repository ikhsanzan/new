<?php 

// require_once '../core/koneksi.php';
// $conn = mysqli_connect("localhost", "root", "", "cart_system");
// require '../vendor/autoload.php';
// require_once __DIR__.'../vendor/autoload.php';



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

    // $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
    $id_barcode = (htmlspecialchars(mysqli_real_escape_string($conn,$data["product_code"])));
    // $generator->getBarcode($id_barcode, $generator::TYPE_CODE_128);
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
    VALUES (NULL, '$id_barcode', '$product_image', '$nama_produk', '$harga', '$berat', '$stock' )";

    return mysqli_query($conn, $query);
    //  mysqli_affected_rows($conn);

}

//Upload Gambar Produk
function upload()
{
    $namaFile = $_FILES['product_image']['name'];
    $ukuranFile = $_FILES['product_image']['size'];
    $error = $_FILES['product_image']['error'];
    $tmpName = $_FILES['product_image']['tmp_name'];
    //cek
    if ($error === 4) {
        echo "<script> 
                alert('pilih gambar dulu');
        </script>";
        return false;
    }
    //cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('bukan gambar ini');

        </script>
        ";
        return false;
    }
    //cek jika ukuran nya terlalu besar
    if ($ukuranFile > 100000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar');

    </script>
    ";
    }
    //upload
    move_uploaded_file($tmpName, 'upload/' . $namaFile);

    return $namaFile;
}

function ubah($data)
{

    global $conn;
    $id = $data['id'];

    $id_barcode = (htmlspecialchars(mysqli_real_escape_string($conn,$data["product_code"])));
    // $product_image = (htmlspecialchars(mysqli_real_escape_string($conn,$data["product_image"])));
    //upload gambar
     $product_image = upload();
    if (!$product_image) {
          return false;
    }
    $nama_produk = (htmlspecialchars(mysqli_real_escape_string($conn,$data["product_name"])));
    $harga = (htmlspecialchars(mysqli_real_escape_string($conn,$data["product_price"])));
    $berat = (htmlspecialchars(mysqli_real_escape_string($conn,$data["product_weight"])));
    $stock = (htmlspecialchars(mysqli_real_escape_string($conn,$data["product_quantity"])));

     
    $query = "UPDATE `product` SET `product_code` = '$id_barcode',
     `product_image` = '$product_image',
     `product_name` = '$nama_produk',
     `product_price` = '$harga',
    `product_weight` = '$berat',
    `product_quantity` = '$stock'
     WHERE `product`.`id` = $id";
    return mysqli_query($conn, $query);



}

function hapus($id){

    global $conn;


    $delete ="DELETE FROM `product` WHERE `product`.`id` = $id";
    return mysqli_query($conn, $delete);

}

?>