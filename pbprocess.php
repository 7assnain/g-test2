<?php
include("cfg/dbconnect.php");// cfg/dbconnect.php

if (isset($_POST["Buy"])) {

    $image = mysqli_real_escape_string($conn, $_POST["my_image"]);//name
    $Name = mysqli_real_escape_string($conn, $_POST["Name"]);//name
    $Price = mysqli_real_escape_string($conn, $_POST["Price"]);//price
    $Description = mysqli_real_escape_string($conn, $_POST["Description"]);//description
    $Count = mysqli_real_escape_string($conn, $_POST["Count"]);//description
    $sqlInsert = "INSERT INTO stage(image_url,  Name , Price , Description , Count ) 
    VALUES ('$image','$Name','$Price', '$Description' , '$Count')";//recorrect table name image , name , price , description
    if(mysqli_query($conn,$sqlInsert)){

        // session_start();
        // $_SESSION["create"] = "Product Added Successfully!";// product 
        header("Location:buy.php");

    }else{
        die("Something went wrong");
    }
}

 


