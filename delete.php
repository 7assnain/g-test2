<?php
if (isset($_GET['id'])) {
include("cfg/dbconnect.php");//make it cfg/dbconnect.php
$id = $_GET['id'];
$sql = "DELETE FROM unorder WHERE id='$id'";// recorret the table
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Product Deleted Successfully!";// product
    header("Location:shopcart.php");
}else{
    die("Something went wrong");
}
}
?>