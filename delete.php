<?php
  include_once "header.php";
?>

<?php 
require_once "includes/db.inc.php";
require_once "includes/functions.inc.php";
checkIfLoggedIn();
?>

<?php

$id = $_REQUEST['id'];
$sql = "DELETE FROM post WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: index.php');
    exit;
} else {
    echo "Error deleting record";
}
