<?php

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
    
    $stmt = $pdo->query("SELECT * FROM categories");        //Categories টেবিল এর সকল ডাটা সিলেক্ট করা।
    $categories = $stmt->fetchAll();                        //fetchAll- সিলেক্ট করা সব ডাটা নিয়ে আসার জন্য।
                                                            //print_r($categories); ডাটাবেস এর ডাটা আসছে কীনা তা চেক করা।
?>
<!------------------------------------------------------------------------------------------------------------------------------------>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DATABASE TABLE</title>
  </head>
  <body>
    <main>
        <table class="container table table-success table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
<!-------------------------------------------------------এখানে ডাটাবেস টেবিল দেখাবে--------------------------------------------------->
                <?php
                    $i = 1;                                             //Variable Declaration
                    foreach ($categories as $category){  ?>             <!--যতগুলি ডাটা ইনসার্ট করা আছে লুপ ততবার ঘুরবে। category এর পরিবর্তে যে কোনো ওয়ার্ড লেখা যাবে, $categories এর ভ্যালু গুলো $category এখানে অ্যারে হিসাবে স্টোর হবে।------->
                        <tr>
                            <td><?= $i++ ?></td>                        <!---সিরিয়াল নাম্বার ডাটাবেস থেকে না নিয়ে এখানে বানাবো, কেননা কোনো ডাটা ডিলিট করলে id ও ডিলিট হয়ে যায়।---->
                            <td><?= $category['name'] ?></td>           <!--- <? = ?> এটি শর্টকাট echo---->
                            <td><?= $category['description'] ?></td>    <!--এখানে name, description, created_at, updated_at হল ডাটাবেস এর কলাম এর নাম-->
                            <td><?= $category['created_at'] ?></td>
                            <td><?= $category['updated_at'] ?></td>
                            <td>
                                <a href="">Show</a>
                                <a href="">Edit</a>
                                <a href="" onclick="confirm ('Are You Sure?')">Delete</a>
                            </td>
                        </tr>
                <?php   }   ?>
<!------------------------------------------------------------------------------------------------------------------------------------>            
            </tbody>
        </table>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>