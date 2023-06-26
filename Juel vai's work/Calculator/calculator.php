
<?php
if (isset($_POST['submit'])) 
{
    $FirstNumber = $_POST['number1'];
    $SecondNumber = $_POST['number2'];
    $Operator = $_POST['Operator'];
    
    if ($Operator=='Addition') 
    {
        function sum($num1 , $num2)
        {
            $Result = $num1 + $num2;
            return $Result;
        }
          $Result = sum($FirstNumber , $SecondNumber);
    }

    elseif ($Operator=='Subtraction') 
    {
        function sub($num1 , $num2)
        {
            $Result = $num1 - $num2;
            return $Result;
        }
          $Result = sub($FirstNumber , $SecondNumber);
    }

    elseif ($Operator=='Multiplication') 
    {
        function mul($num1 , $num2)
        {
            $Result = $num1 * $num2;
            return $Result;
        }
          $Result = mul($FirstNumber , $SecondNumber);
    }

    elseif ($Operator=='Divition') 
    {
        function div($num1 , $num2)
        {
            $Result = $num1 / $num2;
            return $Result;
        }
          $Result = div($FirstNumber , $SecondNumber);
    }

    elseif ($Operator=='Modulus') 
    {
        function mod($num1 , $num2)
        {
            $Result = $num1 % $num2;
            return $Result;
        }
          $Result = mod($FirstNumber , $SecondNumber);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="Calculator.css">
</head>
<body class="d-flex">
    <div class="card text-center">
        <h1>Calculator</h1>
        <hr>
        <div class="card-body">
            <form action="" method="POST">
                <div>
                    <label for="$num1"><h5>Enter Number</h5></label>
                    <input type="number" class="form-control mb-4" name="number1" id="$num1"  placeholder="Enter number" required>
                </div>
                <div>
                    <h5>Operators</h5>
                    <select name="Operator" id="Operator" class="form-select" aria-label="Default select example">
                        <option value="none">Select Operator</option>
                        <option value="Addition">+</option>
                        <option value="Subtraction">-</option>
                        <option value="Multiplication">*</option>
                        <option value="Divition">/</option>
                        <option value="Modulus">%</option>
                    </select>
                </div>
                <div class="my-3">
                    <label for="$num2"><h5>Enter Number</h5></label>
                    <input type="number" class="form-control mb-4" name="number2" id="$num2"  placeholder="Enter number" required>
                </div>
                <div>
                    <label for="button"></label>
                    <button type="submit" name="submit" class="btn btn-primary">Calculate</button>
                </div>
            </form>
            <hr>
            <h2>Result: <?php echo $Result ?? 0; ?> </h2>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>
