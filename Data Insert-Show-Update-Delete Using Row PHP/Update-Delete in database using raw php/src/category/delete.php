<?php
    session_start();
    /////////////////////////////////DATA COLLECT//////////////////////////////////////////////////////////////////////
    if (isset($_POST['submit']))
    {
        $id = $_POST['id'];        // ইনপুট (showDataFromDatabase.php) ফিল্ড থেকে পাঠানো আইডি এখানে পাবে।
        $name = $_POST['name'];
        $description = $_POST['description'];
    

   ///////////////////////////////////////////////////CONNECT TO DATABASE//////////////////////////////////////////////
        
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
    
    $sql = "DELETE FROM categories WHERE id=$id";
    $stmt= $pdo->prepare($sql);
    $stmt->execute();    

    ///////////////////////////////////////////////////////////APPLY REDIRECT//////////////////////////////////////
    
    $_SESSION['error'] = "Data Deleted Successfully";  //ম্যাসেজটি সেশন এ স্টোর হবে, আমরা যে কোনো পেজ থেকে এক্সেস করতে পারবো।
    header('Location: showDataFromDatabase.php');      //এই পেজ এর এক্সিকিউশন শেষে showDataFromDatabase.php পেজ এ ফিরে যাবে, এটি মূলত redirect.  
    
    }
?>

<!------------------------------------------------------------------------------------------------------------------------------------------->
