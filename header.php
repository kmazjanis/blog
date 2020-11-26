<?php 
session_start()
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div>

    <?php
        if(!isset($_SESSION["username"])){
            echo "not loged in";
        } else{
            echo "all gut";
        };
    ?>

    </div>
        <script src="" async defer></script>
        <div class="admin_header"> 
            <a href="index.php">Home</a>
            <?php
                if(isset($_SESSION['userid'])){
                    echo "<a href='profile.php'>Profile page </a>";
                    echo "<a href='includes/logout.inc.php'>Log Out </a>";
                    echo "<a href='insert_post.php'>Insert Post </a>";
                }
                else {
                    echo "<a href='signup.php'>Sign Up!</a>";
                    echo "<a href='login.php'> Login </a>";
                }
            ?>

        </div>
        
