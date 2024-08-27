<?php 
if (!isset($_SESSION) || session_id() == "" || session_status() === PHP_SESSION_NONE)
session_start() 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <style>
        .huseracount {
            t
        }
    </style>
    <body>
        <div class="topmenu">
            <div class="menubar">

                <?php
                if (isset($_SESSION['name'])){
                    $str=$_SESSION['name'];
                    

                ?>
                    <div><span><a href ="later.php" class="huseracount"> <?php echo $str[0];?></a> </span></div>
                     
                     <div><a href="logout.php">Logout</a></div>

                  
               <?php } ?>
            </div>
        </div>

        </body>
</html>
    
