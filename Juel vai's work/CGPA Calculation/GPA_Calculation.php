    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./form.css">
</head>
<body class="d-flex">
    <div class="my-auto mx-auto">
        <form class="form-login text-center" action="" method="post">
            <div>
                <h2>Enter Your Mark</h2>
                <label for="Number"></label>
                <input type="number" class="form-control mb-4" name="marks" id="number"  placeholder="Enter number" required>
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
            <h2 class="mt-2">
            Your Result: <?php

                        if (isset($_POST['submit'])) 
                        {
                        $marks = $_POST['marks'];

                        if($marks>=80 && $marks<=100){
                            echo " A+";
                        }
                        elseif($marks>=75 && $marks<=79){
                            echo " A";
                        }
                        elseif($marks>=70 && $marks<=74){
                            echo " A-";
                        }
                        elseif($marks>=65 && $marks<=69){
                            echo " B+";
                        }
                        elseif($marks>=60 && $marks<=64){
                            echo " B";
                        }
                        elseif($marks>=55 && $marks<=59){
                            echo " B-";
                        }
                        elseif($marks>=50 && $marks<=54){
                            echo " C";
                        }
                        elseif($marks>=40 && $marks<=49){
                            echo " D";
                        }
                        else{
                            echo "Failed";
                        }

                        }

                        ?>        
            </h2>
        </form>
    </div>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>