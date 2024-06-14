<?php
$servername = "localhost";
$username = "root";
$password = "YchangThird1!";
$dbname = "cells";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mobile WHERE cellnumber='" . $_POST['cellnumber'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $found = true;
} 
else {
    $found = false;
}

$conn->close();

?> 


<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Aris Salvador">
        <title>Globe At Home Online</title>

        <link rel="canonical" href="https://globeathome.online/">    

        <!-- Bootstrap core CSS -->
        <!-- <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/favicon.ico">

        <style>
        </style>    
        <!-- Custom styles for this template -->
        <link href="/template.css" rel="stylesheet">

    </head>
    <body class="text-center" data-new-gr-c-s-check-loaded="14.1181.0" data-gr-ext-installed="">    
        <main class="form-signin">
            <form action="/checker.php" method="post">

                    <div>
                        <img class="mb-4" src="/gfiberplan.png" height="120" alt="">
                    </div>
                <?php 
                    if( $found ){
                ?>
                    <div style="text-decoration: none; font-size: 2em;  --tw-text-opacity: 1; color: rgb(0 98 153 / var(--tw-text-opacity))">
                        <a  href="https://new.globe.com.ph/gfiber">https://new.globe.com.ph/gfiber</a>
                    </div>
                <?php 
                    } else {
                ?>  
                    <div style="text-decoration: none; font-size: 2em;  --tw-text-opacity: 1; color: rgb(0 98 153 / var(--tw-text-opacity))">
                        Number Not Found
                    </div>
                <?php 
                    }
                ?>
                <a class="w-100 btn btn-lg mt-3" href="/" style="background-color: #ff4bce !important; color: white;">Check Another</a>
            </form>
        </main>
    </body>
</html>