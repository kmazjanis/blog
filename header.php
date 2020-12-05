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

 

    </div>
        <script src="" async defer></script>
        <div class="admin_header"> 
            <a href="index.php">Home</a>
            <?php if(isset($_SESSION['userid'])){ ?>
                    <a href='includes/logout.inc.php'>Log Out </a>
                    <a href='insert_post.php'>Insert Post </a>
                <?php } else {?>
                    <a href='signup.php'>Sign Up!</a>
                    <a href='login.php'> Login </a>
                <?php } ?>
                    
               <?php if(isset($_SESSION['username'])){ ?>
                    <span>Hi </span><b><?php echo $_SESSION["username"]; ?></b>
                <?php } else { ?>
                     <span>Not logged in</span>
                <?php }; ?>

        </div>
        
