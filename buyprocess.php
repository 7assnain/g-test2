<?php
include("cfg/dbconnect.php");// cfg/dbconnect.php

if (isset($_POST["Confirm"])) {
    $Username = mysqli_real_escape_string($conn, $_POST["Username"]);//image
    $Useremail = mysqli_real_escape_string($conn, $_POST["Useremail"]);//image
    $Userlocation = mysqli_real_escape_string($conn, $_POST["Userlocation"]);//image
    $Paymethod = mysqli_real_escape_string($conn, $_POST["Paymethod"]);//image
    // $Product_id = mysqli_real_escape_string($conn, $_POST["Product_id"]);//image
    $image = mysqli_real_escape_string($conn, $_POST["my_image"]);//name
    $Product_name = mysqli_real_escape_string($conn, $_POST["Product_name"]);//name
    $Product_price = mysqli_real_escape_string($conn, $_POST["Product_price"]);//price
    $Product_count = mysqli_real_escape_string($conn, $_POST["Product_count"]);//description
    $sqlInsert = "INSERT INTO orders
    (Username , Useremail , Userlocation , Paymethod , 
        image_url ,Product_name , Product_price , Product_count  ) 
    VALUES 
    ('$Username	','$Useremail','$Userlocation', '$Paymethod' ,
     '$image', '$Product_name', '$Product_price', '$Product_count')";//recorrect table name image , name , price , description
    if(mysqli_query($conn,$sqlInsert)){

        session_start();
        $_SESSION["create"] = "Product Added Successfully!";// product 
        header("Location:shopcart.php");

    }else{
        die("Something went wrong");
    }
}