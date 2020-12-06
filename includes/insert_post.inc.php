<?php

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $seotitle = $_POST["seo_title"];
    $content = $_POST["content"];

    require_once "db.inc.php";
    require_once "functions.inc.php";

    createPost($conn, $title, $seotitle, $content);

} else {
    header("location: ../login.php");
    exit();
}
