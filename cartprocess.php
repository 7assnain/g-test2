<?php
include("cfg/dbconnect.php");// cfg/dbconnect.php

if (isset($_POST["Addtocart"])) {

    $image = mysqli_real_escape_string($conn, $_POST["my_image"]);//name
    $Name = mysqli_real_escape_string($conn, $_POST["Name"]);//name
    $Price = mysqli_real_escape_string($conn, $_POST["Price"]);//price
    $Description = mysqli_real_escape_string($conn, $_POST["Description"]);//description
    $sqlInsert = "INSERT INTO unorder(image_url,  Name , Price , Description ) 
    VALUES ('$image','$Name','$Price', '$Description')";//recorrect table name image , name , price , description
    if(mysqli_query($conn,$sqlInsert)){

        session_start();
        $_SESSION["create"] = "Product Added Successfully!";// product 
        header("Location:products.php");

    }else{
        die("Something went wrong");
    }
}

 




