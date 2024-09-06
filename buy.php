<?php include('top_menu.php');

if (!isset($_SESSION) || session_id() == "" || session_status() === PHP_SESSION_NONE)
session_start() 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/global.css">
    <link rel="stylesheet" href="CSS/buypage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Checkout</title>
</head>
<body>
    <header>        
        <div class="headerlogo">
            <a href="shopcart.php">G</a>
        </div>
    </header>
    <section class="buyformcontainer">

    <h3>Complete Your Checkout</h3>

<form action="buyprocess.php" method="post">
    <div class="checkoutinputs">
        <div class="checkoutfields">
    <input type="email" name="Useremail" placeholder="Enter your email" required>
    <input type="url" name="Userlocation" placeholder="Enter your location" required>
    </div>

    <div class="paymethodradio">
    <h4 class="paymethod title">Pay method</h4>
    <div class="visa">
    <input id="visa" type="radio" name="Paymethod" value="visa"  checked/>
    <label for="visa">Visa</label>
    </div>
    <div class="mastercard">
    <input id="MasterCard" type="radio" name="Paymethod" value="MasterCard" />
    <label for="MasterCard">MasterCard</label>
    </div>
    <div class="paypal">
    <input id="PayPal" type="radio" name="Paymethod" value="PayPal" />
    <label for="PayPal">PayPal</label>
    </div>
    <div class="insta">
    <input id="InstaPay" type="radio" name="Paymethod" value="InstaPay" />
    <label for="InstaPay">InstaPay</label>
    </div>
    </div>
    <?php if (isset($_SESSION['name'])){
                $str=$_SESSION['name'];?>
    <input type="text" name="Username" id="" value="<?php echo $str;?>" style="display :none">
    <?php } ?>
    



    <table style="display :none;">



<tbody class="maincardcontainer">

    <?php
    include('cfg/dbconnect.php');// cfg/dbconnect.php
    $sql = "SELECT * FROM  stage";//recorrect table name
    $result = mysqli_query($conn,$sql);

    while($data = mysqli_fetch_array($result)){
     ?>

     <tr class="cardcontainer" id="cardcontainer">
        <td class="cardid"><span>Id : </span><div id="productid"><?php echo $data ['id'];?></div></td>
        <td class="cardname"><span>Name : </span><div id="productname"><?php echo $data ['Name'];?></div></td><!--name-->
        <td class="cardprice"><span>Price : </span><div id="productprice"><?php echo $data ['Price'];?><span class="dolarsign"> $</span></div></td><!--price-->
        <td class="cardname"><span>Count : </span><div id="productCount"><?php echo $data ['Count'];?></div></td><!--name-->
        <td class="cardname"><span>Description : </span><div id="productdesc"><?php echo $data ['Description'];?></div></td><!--name-->
     </tr>
     <!-- <input type="text" name="Product_id" id="" value="<?php //echo $data ['id'];?>" > -->
     <input type="text" name="Product_name" id="" value="<?php echo $data ['Name'];?>" style="display :none;">
     <input type="text" name="Product_price" id="" value="<?php echo $data ['Price'];?>" style="display :none;">
     <input type="text" name="Product_count" id="" value="<?php echo $data ['Count'];?>" style="display :none;">
     <?php
        }?>     
    </tbody>
</table>
 <input type="submit" name="Confirm" id="" value="Confirm" class="confirmbutton">
 </div>
</form>
</section>
</body>
</html>