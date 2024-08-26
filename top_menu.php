<?php 
if (!isset($_SESSION) || session_id() == "" || session_status() === PHP_SESSION_NONE)
session_start() 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration and login in PHP</title>
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
                <!-- <a href="index.php">Home</a> -->
                <?php if (isset($_SESSION['name'])){ ?>
                    <div class="user">
                        <span><a href ="login.php" class="huseracount"> <?= $_SESSION['name']?></a> </span>
                        <a href="logout.php">Logout</a>
                    </div>
                  
               <?php } else { ?>
                <!-- <a href="register.php">Register</a>
                <a href="login.php">Login</a> -->
                <?php } ?>
            </div>
        </div>

        </body>
</html>
    
