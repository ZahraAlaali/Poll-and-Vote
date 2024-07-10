<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="authorstyle.css" rel="stylesheet"/>
    <link rel="icon" href="favicon.ico">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    # to prevent session hijacking and sniffing
    ini_set("session.cookie_httponly", 1);
    ini_set("session.cookie_secure", 1);
    session_start();
    if (!isset($_SESSION["uid"])){
        die( "<div class='authorization'>
            <h2>YOU NEED TO LOGIN TO ACCESS THE WEBPAGE</h2>
            <a class='author' href='login.php'>login</a>
            <a class='author' href='home.php'>home page</a> 
            </div>"
        );
    }
    ?>
</body>

