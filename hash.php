<?php

/**
 * In this case, we want to increase the default cost for BCRYPT to 12.
 * Note that we also switched to BCRYPT, which will always be 60 characters.
 */
// $options = [
//     'cost' => 12,
// ];
// echo password_hash("r", PASSWORD_BCRYPT);


// require 'vendor/autoload.php';

// This will output the barcode as HTML output to display in the browser
// $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
// echo $generator->getBarcode('93922sss93', $generator::TYPE_CODE_128);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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

    <div class="hero-image">
        <div class="container hero-container">
            <h1><span>I am Parfum</span></h1>

            <p class="des">Temukan Parfum Terbaik Anda Disini</p>
            <button type="button" class="btn  btn-lg">Belanja Sekarang</button>

            <!-- <a href="#targetname"><button class="shop">Belanja Sekarang</button></a> -->
        </div>
    </div>

</body>

</html>