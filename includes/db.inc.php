<?php


    $conn = mysqli_connect("localhost", "root", "", "blogdb");


    if(!$conn){
        die("connection failed: " . mysqli_connect_error());
    }
    else {
        echo "connection gut";
    }
    // if(mysqli_connect_errno()){
    //     echo "Failed to connect";
    //     exit();
    // }
    // echo "Connection succesfull";

    // $sql = "INSERT INTO post (title, seo_title, content, author)
    // VALUES ('$title', '$seo_title', '$content', '$author')";
    // mysqli_query($conn, $sql);
    //header('Location: http://localhost:8080/');
    //exit();

    // if(mysqli_connect_errno()){
    //     echo "Failed to connect";
    //     exit();
    // }
    // echo "Connection succesfull";

    // $dsn = 'mysql:dbname=blogdb;host=localhost';
    // try{
    //     $conn2 = new PDO($dsn, 'root', '');

    //     $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "Connection sucess";
    // } 
    // catch (PDOException $e){
    //     echo "Error in connection" . $e->getMessage();    
    // }