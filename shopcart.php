<?php include('top_menu.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/global.css">
    <link rel="stylesheet" href="CSS/productspage2.css">
    <link rel="stylesheet" href="CSS/shoppingcart.css">
    <title>Shop Cart </title><!--products list-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
         .headerlogo {
        font-size: 30px;
        position: absolute;
        font-weight: 800;
        top: 15px;
        left : 5%;
    }
    .headerlogo a {
            color: #566dc5;
    }
    td div {
        display : inline-block ;
    }
    </style>

</head>
<body>
<header>
        <div class="headerlogo">
            <a href="index2.php">G</a>
        </div>
        <!-- <div class="headershopcart"><span onclick="togglecart()"><img src="img/shopingcart.png" alt="" class="shopcartimg"></span></div> -->
        <div class="productspagetitle">
            <h2>Your Products</h2>
        </div>
    </header>
    <!-- <div class="shoppingcartcontainer" id="cartcard">
        <div class="cartcontainerheader">
            <h4>Shop cart</h4>
        </div>
        <div class="cartcontainermain">
            <table id="carttable">
                <tbody id="carttbody">

                </tbody>
            </table>
        </div>
        <div class="cartcontainerfooter">
            <a href="shopcart.php">Manege Cart</a>
            <span class="closecartcontainer">Close</span> 
        </div>
    </div> -->
    <div >
        <?php
        // session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div >
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>

        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div>
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>

    </div>  

    <table >



        <tbody class="maincardcontainer">

            <?php
            include('cfg/dbconnect.php');// cfg/dbconnect.php
            $sql = "SELECT * FROM  unorder";//recorrect table name
            $result = mysqli_query($conn,$sql);

            while($data = mysqli_fetch_array($result)){
             ?>

             <tr class="cardcontainer" id="cardcontainer">
                <td class="cardimg"><img src="<?php echo $data ['Image'];?>" id="productimg"></td><!--image-->
                <td class="cardid" style="display :none;"><span>Id : </span><div id="productid"><?phpecho $data ['id'];?></div></td>
                <td class="cardname"><span>Name : </span><div id="productname"><?php echo $data ['Name'];?></div></td><!--name-->
                <td class="cardprice"><span>Price : </span><div id="productprice"><?php echo $data ['Price'];?><span class="dolarsign"> $</span></div></td><!--price-->
                <td class="cardlinks">
                    <a href="view.php?id=<?php echo $data['id']; ?>" class="cardmorelink">More</a>
                    <a href="buy.php">Buy</a>
                </td>
             </tr>
            <?php
        }?>        
        </tbody>
    </table>
    <script>
                let cartcard = document.getElementById("cartcard");
                function togglecart(){
                    cartcard.classList.toggle("opencart");
                }
            </script>
            <!-- edit to suit the shop cart -->
</body>
</html>
