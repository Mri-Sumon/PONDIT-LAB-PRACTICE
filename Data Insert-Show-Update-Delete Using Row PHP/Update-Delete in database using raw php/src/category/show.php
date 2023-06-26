<?php

    $id = $_GET['id'];  //showDataFromDatabase থেকে পাঠানো ডাটাকে এই পেজ থেকে ক্যাচ করা হয়েছে।

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
    $categories = $stmt->fetchAll();          

?>
<!------------------------------------------------------------------------------------------------------------------------------------------->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SHOW PAGE</title>
  </head>
  <body>
    <main class="container my-3">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody>
<!-------------------------------------------------------এখানে ডাটাবেস টেবিল দেখাবে--------------------------------------------------->
                <?php                                               
                    foreach ($categories as $category){  ?>                 
                        <tr>
                            <td><?= $category['name']; ?></td>             
                            <td><?= $category['description']; ?></td>       
                            <td><?= $category['created_at']; ?></td>
                            <td><?= $category['updated_at']; ?></td>
                        </tr>
                <?php   }   ?>
<!------------------------------------------------------------------------------------------------------------------------------------>            
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
                <a href="showDataFromDatabase.php" type="submit" name ="" class="btn btn-primary">Back</a>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>