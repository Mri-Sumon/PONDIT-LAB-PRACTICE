<?php
    include_once('./vendor/autoload.php');
    use JsonCalculator\calculatorClassFolder\Calculator; //এখানে JsonCalculator = ‍src

    if (isset($_SERVER['REQUEST_METHOD'])=="POST")      //submit বাটন এ ক্লিক করলে if বডিতে প্রবেশ করবে।
        {                                               //null use না করলে আউটপুট এ আমরা string error পাবো।
            $num1 = $_POST['Number1'] ?? null;          //ইনপুট হতে Number1 এর ভ্যালু  $num1 তে এ্যাসাইন হবে, ইনপুট ভ্যালু না থাকলে Null ভ্যালু সাবমিট হবে।
            $num2 = $_POST['Number2'] ?? null;         //ইনপুট হতে Number2 এর ভ্যালু  $num2 তে এ্যাসাইন হবে, ইনপুট ভ্যালু না থাকলে Null ভ্যালু সাবমিট হবে।

            @$submitSubmit = $_POST['submit'];
            @$plusPlus = $_POST['Plus'];
            @$minusMinus = $_POST['Minus'];
            @$multiplexMultipplex = $_POST['Multiplex'];
            @$divisionDivision = $_POST['Division'];
            @$modulusModulus = $_POST['Modulus'];
        }
    $calculatorMachine = new Calculator ($num1, $num2, $submitSubmit, $plusPlus, $minusMinus, $multiplexMultipplex, $divisionDivision, $modulusModulus);    //যেহেতু __construct মেথড সরাসরি ক্লাসকে পায়, তাই আমরা Calculator ক্লাস এর মাধ্যমে __construct মেথড এ প্যারামিটার pass করতে পারবো। 
    echo $calculatorMachine->calculate();                                                                                 //sum ম্যথডকে অবজেক্ট দিয়ে কল করা হয়েছে।
?>

<!------------------------------------------------------------HTML Code---------------------------------------------------------------------------------------------------------->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Calculator</title>
  </head>
  <body>
    <main>
        <body>
            <div class="Container my-5">
                <div class="row">
                    <div class = "col-md-4 offset-md-4">
                        <div class = "card">
                            <header><h5 class="my-2 mx-2">Calculator</h5></header>
                            <hr>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="mb-3">
                                        <label for="Number1" class="form-label">Number1:</label>
                                        <input type="text" class="form-control" name="Number1" id="Number1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Number2" class="form-label">Number2:</label>
                                        <input type="text" class="form-control" name="Number2" id="Number2">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <button type="submit" name="Plus" value="+" class="btn btn-primary">+</button>
                                        <button type="submit" name="Minus" value="-" class="btn btn-primary">-</button>
                                        <button type="submit" name="Multiplex" value="*" class="btn btn-primary">*</button>
                                        <button type="submit" name="Division" value="/" class="btn btn-primary">/</button>
                                        <button type="submit" name="Modulus" value="%" class="btn btn-primary">%</button>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" name="submit" class="btn btn-primary">Calculate</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </body>
        <footer></footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>