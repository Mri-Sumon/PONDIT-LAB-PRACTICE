<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration Page Input</title>
  </head>
  <body>
    <header></header>
    <main class = "container">
        <?php
        if (isset($_SERVER['REQUEST_METHOD']) == 'post')
          {
            $firstName = $_POST['fname'] ?? '';
            $lasttName = $_POST['lname'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $checkMark = $_POST['checkbox'] ?? '';

            $i = 1;
          }
        ?>
        <table class="table table-success table-striped mt-3">
          <thead>
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Name</th>
              <th scope="col">Email-Address</th>
              <th scope="col">Password</th>
              <th scope="col">Checked</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php echo $i++;?></th>
              <td><?php echo $firstName.$lasttName ?? ''?></td>
              <td><?php echo $email ?? ''?></td>
              <td><?php echo $password ?? ''?></td>
              <td><?php echo $checkMark ?? ''?></td>
            </tr>
          </tbody>
        </table>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>