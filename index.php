<?php
include "top_menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>g-test</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/lange.css">
    <link rel="stylesheet" href="CSS/acountdisplay.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
<style>
    .langfield {
        right: 22%;
    }
    .adminsigndiv {
        position:absolute;
        top:40%;
        left : 35%;
        text-align :center;
    }
    .adminsigndiv h2{
        color : #566dc5;
    }
    .adminsigndiv p{
        font-size :20px;
    }
    .adminsigndiv span {
        color : #566dc5;
    }
</style>
</head>
<body>
    <div class="maincontainer">
        <header>
            <div class="logo">
                <p class="glogo">G</p>
            </div>
            <div class="searchbar"></div>
            <div class="headerlinks">
            <div class="langfield">
                <select name="language" id="lang">
                    <option value="defult" selected>Lang</option>
                    <option value="ar" id="arlang" >Arabic</option>
                    <option value="en" id="enlang">English</option>
                </select></div>
            <div class="headershopcart"></div>
            <div class="signcontainer">
            <div class="signinheader"><a href="login.php" class="Signinlink">Sign In</a></div>
            <div class="signupheader"><a href="register.php" class="signuplink">Sign Up</a></div>
            </div>
            </div>
        </header>
        <section>
        <div class="adminsigndiv">
                <h2>Wellcome in User page registration</h2>
                <p><span>"</span> please sign and go to Home page <span>"</span></p>
            </div>
        </section>
    </div>
    <script src="JS/lang.js"></script>
    <script src="JS/main.js"></script>
</body>
</html>