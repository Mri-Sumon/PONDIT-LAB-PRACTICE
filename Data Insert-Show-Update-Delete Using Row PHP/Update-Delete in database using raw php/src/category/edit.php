<?php

    $id = $_GET['id'];  //showDataFromDatabase.php থেকে পাঠানো ডাটাকে এই পেজ থেকে ক্যাচ করা হয়েছে।

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
    /////////////////////////////////////////////////////APPLY QUERY///////////////////////////////////////////////////
        
    $stmt = $pdo->query("SELECT * FROM categories WHERE id = $id"); // where id = $id অর্থাৎ $id তে যে ভ্যালু আসবে তাই সিলেক্ট হবে।
    $categories = $stmt->fetchAll();    // $id আসা ডাটা $categories তে অ্যাসাইন হবে।
?>

<!------------------------------------------------------------------------------------------------------------------------------------------->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>EDIT</title>
  </head>
  <body>
    <main class="container">
        <?php
            foreach ($categories as $category){  ?>                             <!--যতগুলি ডাটা $categorie তে আছে লুপ ততবার ঘুরবে। $category এর পরিবর্তে যে কোনো ওয়ার্ড লেখা যাবে, $categories এর ডাটা গুলো $category তে অ্যারে হিসাবে স্টোর হবে।------->
                <form action="update_store.php" method="POST" class="my-3">   <!--update_store.php--------------> 
                    
                    <input type="hidden" name ="id" class="form-control" id="id" value="<?=$id;?>">   <!---name ="id" হল মূলত $id = $_GET['id']; ইনপুট ডাটার সাথে আইডি, update_store.php পেজে পাঠানো হল। hidden করায় ইউজার এই ফিল্ডটা দেখতে পাবেনা, type="text" করলে দেখা যাবে।------->
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name ="name" class="form-control" id="name" value="<?=$category['name'];?>">         <!--ডাটাবেস থেকে নাম এখানে চলে আসবে।-->
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <input type="text" name="description" class="form-control" id="description" value="<?=$category['description'];?>">   <!--ডাটাবেস থেকে ডেসক্রিপশন এখানে চলে আসবে।-->
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" name ="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
        <?php   }   ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>