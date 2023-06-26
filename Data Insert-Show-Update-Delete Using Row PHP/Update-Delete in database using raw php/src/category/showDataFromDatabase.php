<?php
session_start();

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
    
    $stmt = $pdo->query("SELECT * FROM categories ORDER BY id DESC");  //Categories টেবিল এর সকল ডাটা সিলেক্ট করা। //ORDER BY id DESC যেগুলি শেষে ইনপুট করবো তা সিরিয়ালে উপরে থাকবে।
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
    <main class="container">
<!-------------------------------------------------------SUCCESSFULL MESSAGE---------------------------------------------------------------------------------------->
        <?php                                   
              if (isset($_SESSION['msg'])){ ?>          <!---যদি session এর ভীতরে msg থাকে, তাহলে ভীতরের ম্যাসেজটি প্রিন্ট করবে।--->
                <div class="alert alert-success">
                    <strong><?php echo $_SESSION['msg']; ?></strong>      <!---update_store.php এর ম্যাসেজটি প্রিন্ট করবে।------------->
                    <a href="#" class="close d-flex justify-content-end" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
                <?php unset($_SESSION['msg']); ?>       <!---redirect.php এর ম্যাসেজটি দেখানোর পর ডিলিট হয়ে যাবে---------------->
        <?php } ?>

        <?php                                           
              if (isset($_SESSION['error'])){ ?>        <!---যদি session এর ভীতরে error পায়, তাহলে ভীতরের ম্যাসেজটি প্রিন্ট করবে।-->
                <div class="alert alert-success alert-dismissible">
                  <?php echo $_SESSION['error']; ?>       
                  <a href="#" class="close d-flex justify-content-end" data-dismiss="alert" aria-label="close">&times;</a>
                </div>
                <?php unset($_SESSION['error']); ?>       
        <?php } ?>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <table class="table table-success table-striped">
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
                    $i = 1;                                                 //Variable Declaration
                    foreach ($categories as $category){  ?>                 <!--যতগুলি ডাটা ইনসার্ট করা আছে লুপ ততবার ঘুরবে। category এর পরিবর্তে যে কোনো ওয়ার্ড লেখা যাবে, $categories এর ডাটা গুলো $category তে অ্যারে হিসাবে স্টোর হবে।------->
                        <tr>
                            <td><?= $i++ ?></td>                            <!---সিরিয়াল নাম্বার ডাটাবেস থেকে না নিয়ে এখানে বানাবো, কেননা কোনো ডাটা ডিলিট করলে id ও ডিলিট হয়ে যায়।---->
                            <td><?= $category['name']; ?></td>              <!--- <? = ?> এটি শর্টকাট echo---->
                            <td><?= $category['description']; ?></td>       <!--এখানে name, description, created_at, updated_at হল ডাটাবেস এর কলাম এর নাম-->
                            <td><?= $category['created_at']; ?></td>
                            <td><?= $category['updated_at']; ?></td>
                            <td>
                                <a href="show.php?id=<?=$category['id'];?>">Show</a>     <!-- ?id= আইডি প্যারাম বলা হয়, প্রত্তেকটি ইনসার্টেড ডাটার আইডি সেই ডাটার জন্য ক্যাস করবে, এখন যদি show button এ মাউস রাখি তাহলে ঐলাইনের ডাটার আইডি দেখাবে, এই স্পেসিফিক আইডি ধরে showInsertedData.php পেজ এ স্পেসিফিক ডাটা দেখাবো, show button এ ক্লিক করলে দেখতে পাবো সার্স বার দিয়ে ডাটা পাস হচ্ছে -->
                                <a href="edit.php?id=<?=$category['id'];?>">Edit</a>
                                <form action="delete.php" method ="post">                 <!--এখান থেকে ইনপুট ডাটার আইডি delete.php পেজ এ পাঠাবো। আমরা যদি GET দিয়ে ডাটা এখান থেকে delete.php পেজ এ ডাটা পাঠাইতাম, তাহলে url এ ইনসার্টেড ডাটার আইডি পরিবর্তন করে ইন্টার করলে ডাটাটি ডিলিট হয়ে যাইতো, তাই form দিয়ে ডাটা পাঠানো হয়েছে। -------------------->
                                    <input type="hidden" name="id" value="<?=$category['id'];?>">
                                    <button type="submit" name="submit" class="btn-primary" onclick="confirm ('Are You Sure?')">Delete</button>
                                </form>
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