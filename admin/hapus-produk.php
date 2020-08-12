<?php 

// require_once 'functions.php';
// require_once '../core/koneksi.php';
include_once '../core/core.php';
require_once '../function/produk_function.php';


$id = $_GET["id"];

if (hapus ($id) > 0){

    echo "<script> alert('data berhasil di hapus!');
        document.location.href = 'dataproduk.php';

        </script>";
    // header('Location: cruddatabayi.php');

}else{
    echo "
    <script>
        alert('data tidak berhasil di hapus!');
        document.location.href = 'admin.php';

    </script>

";
// header('Location: cruddatabayi.php');

}

        // document.location.href = 'index.php';   
        // document.location.href = 'index.php';


?>