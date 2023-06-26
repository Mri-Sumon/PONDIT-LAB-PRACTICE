<?php
    session_start();
    
    ///////////////////////////////////////////////////////FORM DATA COLLECT///////////////////////////////////////

    if (isset($_SERVER['REQUEST_METHOD'])=="POST"){
        @$name = $_POST['name'];
        @$description = $_POST['description'];
    }

    $data = ['name' => $name, 'description' => $description];

    ////////////////////////////////////////////////////////CONNECT TO DATABASE////////////////////////////////////

    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
    $pdo = new PDO("mysql:host=$servername;dbname=hospital_management", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }

    ////////////////////////////////////////////////////////////APPLY QUERY////////////////////////////////////////

    $sql = "INSERT INTO categories (name, description) VALUES (:name, :description)";
    $stmt= $pdo->prepare($sql);     
    $stmt->execute($data);          

    ///////////////////////////////////////////////////////////APPLY REDIRECT//////////////////////////////////////
    
    $_SESSION['msg'] = "Data Submitted Successfully";       //ম্যাসেজটি সেশন এ স্টোর হবে, আমরা যে কোনো পেজ থেকে এক্সেস করতে পারবো।
    header('Location: ../../index.php');                    //এই পেজ এর এক্সিকিউশন শেষে index.php পেজ এ ফিরে যাবে।  
?>