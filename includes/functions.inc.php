<?php

function emptyInputSignup($name, $email, $username, $pass, $passrepeat)
{
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pass) || empty($passrepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username)
{
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passMatch($pass, $passrepeat)
{
    $result;
    if ($pass !== $passrepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passToShort($pass)
{
    $result;
    if (strlen($pass) < 5) {

        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function usernameExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn); //make prepared staments so you cant type code inside form
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pass)
{
    $sql = "INSERT INTO users(usersName, usersEmail, usersUid, usersPass) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $email, $hashedPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();
}

function createPost($conn, $title, $seotitle, $content)
{
    $sql = "INSERT INTO post(title, seo_title, content) VALUES (?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../insert_post.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $title, $seotitle, $content);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../insert_post.php?error=none");
    exit();
}

function emptyInputLogin($username, $pass)
{
    $result;
    if (empty($username) || empty($pass)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pass)
{
    $usernameExists = usernameExists($conn, $username, $username);

    if ($usernameExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $hashedPass = $usernameExists['usersPass'];
    $checkPass = password_verify($pass, $hashedPass);

    if ($checkPass === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } else if ($checkPass === true) {
        session_start();
        $_SESSION["userid"] = $usernameExists['usersId'];
        $_SESSION["username"] = $usernameExists['usersName'];
        header("location: ../index.php");
    }
}
