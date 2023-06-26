<?php
    session_start();

    ///////////////////////////////////////////////////////DATA COLLECT///////////////////////////////////////

    if (isset($_SERVER['REQUEST_METHOD'])=="POST"){
        $id = $_POST['id'];        // ইনপুট (edit.php) ফিল্ড থেকে পাঠানো আইডি এখানে পাবে।
        $name = $_POST['name'];
        $description = $_POST['description'];
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
    $sql="UPDATE categories SET name=:name, description=:description WHERE id=$id"; //$id ইনপুট (edit.php) ফিল্ড থেকে যে আইডি আসছে, সেই আইডি ধরে ডাটা আপডেট হবে।
    $stmt=$pdo->prepare($sql);     
    $stmt->execute($data);

    ///////////////////////////////////////////////////////////APPLY REDIRECT//////////////////////////////////////
    
    $_SESSION['msg'] = "Data Updated Successfully";       //ম্যাসেজটি সেশন এ স্টোর হবে, আমরা যে কোনো পেজ থেকে এক্সেস করতে পারবো।
    header('Location: showDataFromDatabase.php');           //এই পেজ এর এক্সিকিউশন শেষে showDataFromDatabase.php পেজ এ ফিরে যাবে, এটি মূলত redirect.  
?>