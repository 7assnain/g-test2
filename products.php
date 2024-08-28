<?php include('top_menu.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="CSS/productspage.css">
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
    </header>
  

    <header >
            <h1> Products Page </h1><!--products list-->

        </header>


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

        <thead>

            <tr>

                <th>id</th>
                <th>Image</th><!--image-->
                <th>Name</th><!--name-->
                <th>Price</th><!--price-->
                <th>Action</th>

            </tr>

        </thead>

        <tbody>

            <?php
            include('cfg/dbconnect.php');// cfg/dbconnect.php
            $sql = "SELECT * FROM  products";//recorrect table name
            $result = mysqli_query($conn,$sql);

            while($data = mysqli_fetch_array($result)){
             ?>

             <tr>

                <td><?php echo $data ['id'];?></td>
                <td><img src="<?php echo $data ['Image'];?>"></td><!--image-->
                <td><?php echo $data ['Name'];?></td><!--name-->
                <td><?php echo $data ['Price'];?></td><!--price-->
                <td>
                    <a href="view.php?id=<?php echo $data['id']; ?>" > More</a>
                </td>

             </tr>

            <?php
        }?>        


        </tbody>


    </table>



</body>
</html>
    
</body>
</html>