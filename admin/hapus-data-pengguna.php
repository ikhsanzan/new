<?php 

// require_once 'functions.php';
// require_once '../core/koneksi.php';
// require_once '../function/Produk_Function.php';
include_once '../core/core.php';
include_once '../function/data_pengguna.php';



$id = $_GET["id"];

if (hapus ($id) > 0){

    echo "<script> alert('data berhasil di hapus!');
        document.location.href = 'data-pengguna.php';

        </script>";
    // header('Location: cruddatabayi.php');

}else{
    echo "
    <script>
        alert('data tidak berhasil di hapus!');
        document.location.href = 'data-pengguna.php';

    </script>

";
// header('Location: cruddatabayi.php');

}

        // document.location.href = 'index.php';   
        // document.location.href = 'index.php';


?>