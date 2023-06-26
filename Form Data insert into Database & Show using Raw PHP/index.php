<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FORM</title>
  </head>
  <body>
    <header></header>
    <main class = "container">
        <center class ="my-3"><h3>Registration Form</h3></center>
<!-------------------------------------------------------SUCCESSFULL MESSAGE---------------------------------------------------------------------------------------->
        <?php                                   
              if (isset($_SESSION['msg'])){ ?>          <!---যদি session এর ভীতরে msg থাকে, তাহলে ভীতরের ম্যাসেজটি প্রিন্ট করবে।--->
                <div class="alert alert-success">
                    <strong><?php echo $_SESSION['msg']; ?></strong>      <!---redirect.php এর ম্যাসেজটি প্রিন্ট করবে।------------------------------->
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
        <form action = "src/category/redirect.php" method="POST" class="my-3"> 
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name ="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input type="text" name="description" class="form-control" id="description" required>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>