<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Calculator</title>
  </head>
  <body>
    <header></header>
    <main class="container col-md-4 my-5 offset-md-4">
        <h3>Output</h3>
        <div class="card">
            <div class="card-body">
                    <?php
                        if (isset($_POST['submit']))
                            {
                                $input1 = $_POST['num1'];
                                $input2 = $_POST['num2'];
                                $operator = $_POST['opt'];
                                
                                if ($operator == 'Addition')
                                    {
                                        function sum($val1, $val2){
                                            $result = $val1 + $val2;
                                            return $result;
                                        }
                                        $output = sum($input1, $input2);
                                    }
                                elseif ($operator == 'Substruction')
                                    {
                                        function sum($val1, $val2){
                                            $result = $val1 - $val2;
                                            return $result;
                                        }
                                        $output = sum($input1, $input2);
                                    }
                                elseif ($operator == 'Multiplication')
                                    {
                                        function sum($val1, $val2){
                                            $result = $val1 * $val2;
                                            return $result;
                                        }
                                        $output = sum($input1, $input2);
                                    }
                                elseif ($operator == 'Division')
                                    {
                                        function sum($val1, $val2){
                                            $result = $val1 / $val2;
                                            return $result;
                                        }
                                        $output = sum($input1, $input2);
                                    }
                                elseif ($operator == 'Modulas')
                                    {
                                        function sum($val1, $val2){
                                            $result = $val1 % $val2;
                                            return $result;
                                        }
                                        $output = sum($input1, $input2);
                                    }
                                elseif ($operator == 'Root')
                                    {
                                        function sum($val1){
                                            $result = sqrt($val1);
                                            return $result;
                                        }
                                        $output = sum($input1);
                                    }
                            }
                        else
                            {
                                $output = 0;
                            }
                        echo $output ?? 0;                    //if input null output print 0
                    ?>
            </div>
        </div>
        <div class="my-2 d-flex justify-content-end">
            <a href="Calculator.html" class="btn btn-info stretched-link">Back</a>
        </div>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>