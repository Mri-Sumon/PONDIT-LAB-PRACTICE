<!------------------ইনপুট ডাটাগুলি SESSION এ পাঠাবো।--------------------------------------------->
<?php
    session_start();

    @$_SESSION['userName'] = $_POST['name'];   //@ অপ্রয়োজনীয় error defend করার জন্য।
    @$_SESSION['userEmail'] = $_POST['email'];
    @$_SESSION['userPassword'] = $_POST['password'];
    @$_SESSION['useroHobbies'] = $_POST['hobbies'];
?>
<!-----------------------------------SESSION END---------------------------------------->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Session in Form</title>
  </head>
  <body>
    <div class="container">
        <h1>Registration Form</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label class="form-label" for="hobby">Hobbies:
                    <input type="checkbox" name="hobbies[]" value="Cricket" class="form-check-input" id="cricket"><label for="cricket">cricket</label>
                    <input type="checkbox" name="hobbies[]" value="Football" class="form-check-input" id="football"><label for="football">football</label>
                    <input type="checkbox" name="hobbies[]" value="Hocky" class="form-check-input" id="Hockay"><label for="Hocky">Hockay</label>
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>