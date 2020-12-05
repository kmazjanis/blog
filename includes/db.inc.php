<?php

    $db_path = 'localhost' ;
    $db_username = 'root';
    $db_pass = '';
    $db_name = 'blogdb';
    
    $conn = mysqli_connect($db_path, $db_username, $db_pass, $db_name);


   
    if(mysqli_connect_errno()){
        echo "Failed to connect to db";
        exit();
    }
    echo "Connection succesfull";


    // $dsn = 'mysql:dbname=blogdb;host=localhost';
    // try{
    //     $conn2 = new PDO($dsn, 'root', '');

    //     $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "Connection sucess";
    // } 
    // catch (PDOException $e){
    //     echo "Error in connection" . $e->getMessage();    
    // }