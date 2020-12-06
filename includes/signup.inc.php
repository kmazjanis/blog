<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $passrepeat = $_POST["passrepeat"];

    require_once "db.inc.php";
    require_once "functions.inc.php";

    if (mysqli_connect_errno()) {
        echo "Failed to connect";
        exit();
    }
    echo "Connection succesfull";

    if (emptyInputSignup($name, $email, $username, $pass, $passrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUsername($username) !== false) {
        header("location: ../signup.php?error=invalidusername");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (passMatch($pass, $passrepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    if (usernameExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    if (passToShort($pass) !== false) {
        header("location: ../signup.php?error=passtoshort");
        exit();
    }

    createUser($conn, $name, $email, $username, $pass);

} else {
    header("location: ../signup.php");
    exit();
}
