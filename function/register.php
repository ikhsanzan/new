<?php 

// require_once '../core/koneksi.php';

$conn = mysqli_connect("localhost", "root", "", "cart_system");


function registrasi($data){
    global $conn;

    //stripslashes = untuk memasukkan teks / karaktek saja spasi maupun backslas tidak termasuk
    //untuk huruf kecil saja strtolower
    $username = strtolower(stripslashes( $data["username"]));
    //mysqli_real_escape_string untuk memungkinkan user masukkan pass ada tanda kutip dan di masukkan ke dtabase dgn aman
    $email = htmlspecialchars(mysqli_real_escape_string( $conn,$data["email"]));
    $password = htmlspecialchars($data["password"]);
    $password = password_hash($password, PASSWORD_BCRYPT);
    $alamat = mysqli_real_escape_string( $conn,$data["alamat"]);
    $no_hp = mysqli_real_escape_string( $conn,$data["no_hp"]);
    $level = mysqli_real_escape_string( $conn,$data["level"]);

    



  
    // $password = md5($password);
    // var_dump($password);

    mysqli_query($conn, "INSERT INTO `users` (`id`, `username`, `email`, `password`, `alamat`, `no_hp`, `level`) VALUES (NULL, '$username', '$email', '$password', '$alamat', '$no_hp', '$level')");

    return mysqli_affected_rows($conn);

}

?>