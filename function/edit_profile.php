<?php

$conn = mysqli_connect("localhost", "root", "", "barcode");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function ubahprofile($data)
{

    global $conn;

    //mencegah script html yang di input ke web 
    //htmlspecialchars
    $id = $data["id"];

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

    $query = "UPDATE `data_pelanggan` SET 
    usernme = $username,
    email = $email,
    password = $password,
    alamat = $alamat,
    $no_hp = $no_hp,
    level = $level WHERE  `data_pelanggan`.`id` = $id";

    mysqli_query($conn, $query);
    return  mysqli_affected_rows($conn);
}

?>