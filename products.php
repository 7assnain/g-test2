<?php include('top_menu.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/global.css">
    <link rel="stylesheet" href="CSS/productsconpage.css">
    <title>Products control</title><!--products list-->
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
    </style>

</head>
<body>
<header>
        <div class="headerlogo">
            <a href="index2.php">G</a>
        </div>
        <div class="headershopcart"><a href="shopcart.php"><img src="img/shopingcart.png" alt=""></a></div>
        <div class="productspagetitle">
            <h2>Our Products</h2>
        </div>
    </header>
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

        <!-- <thead>

            <tr>

                <th>id</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>

            </tr>

        </thead> -->

        <tbody class="maincardcontainer">

            <?php
            include('cfg/dbconnect.php');// cfg/dbconnect.php
            $sql = "SELECT * FROM  products";//recorrect table name
            $result = mysqli_query($conn,$sql);

            while($data = mysqli_fetch_array($result)){
             ?>

             <tr class="cardcontainer">
                <td class="cardimg"><img src="<?php echo $data ['Image'];?>"></td><!--image-->
                <!-- <td class="cardid"><span>Id : </span><?php //echo $data ['id'];?></td> -->
                <td class="cardname"><span>Name : </span><?php echo $data ['Name'];?></td><!--name-->
                <td class="cardprice"><span>Price : </span><?php echo $data ['Price'];?><span class="dolarsign"> $</span></td><!--price-->
                <td class="cardlinks">
                    <a href="view.php?id=<?php echo $data['id']; ?>" class="cardmorelink">More</a>
                    <a href="">Add To Cart</a>
                </td>
             </tr>
            <?php
        }?>        
        </tbody>
    </table>
</body>
</html>
