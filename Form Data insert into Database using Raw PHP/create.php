<?php
//////////////////////////////////////FORM DATA COLLECT/////////////////////////////////////
    if (isset($_SERVER['REQUEST_METHOD'])=="POST"){
        $name = $_POST['name'];
        $description = $_POST['description'];
    }

    $data = ['name' => $name, 'description' => $description];

//////////////////////////////////////CONNECT TO DATABASE///////////////////////////////////
//Connection create using PDO

    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
    $pdo = new PDO("mysql:host=$servername;dbname=hospital_management", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }

//////////////////////////////////////APPLY QUERY///////////////////////////////////////////
//INSERT query using PDO

    $sql = "INSERT INTO categories (name, description) VALUES (:name,:description)";    //sql INSERT কুয়েরী 
    $stmt= $pdo->prepare($sql);     //ডাটাবেস কানেকশনের PDO কে ধরে কাজ করবে।
    $stmt->execute($data);          //$data উপরে আমরা যে অ্যারে ডিক্লিয়ার করছি সেটি।

//////////////////////////////////////APPLY REDIRECT///////////////////////////////////////////
?>