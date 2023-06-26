<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimentional_Array</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container bg-light">
        <?php
        $student = ['CSE' => [
                                ['Name'=>'Juel', 'Email'=>'juel@gmai.com', 'Result'=>'3.80'],
                                ['Name'=>'Rofiq', 'Email'=>'rofiq@gmai.com', 'Result'=>'3.90'],       
                            ],
                    'EEE' => [
                                ['Name'=>'Nur', 'Email'=>'nur@gmai.com', 'Result'=>'3.70'],
                                ['Name'=>'Shathi', 'Email'=>'shathi@gmai.com', 'Result'=>'3.90'],
                            ]
        ];

        foreach ($student as $key => $value) //$student অ্যারেতে দুটি key (CSE, EEE) আছে, key দুটির আবার নিজেস্ব ভ্যালু আছে।
            {
                echo "<br> <br>";
                echo $key;            //foreach লুপ প্রথমে 0 ভ্যালুনিয়ে ডুকবে, এবং $student অ্যারেতে 0 পজিশনে থাকা ভ্যালু প্রিন্ট করবে।
                if (is_array($value)) 
                    {
                        foreach ($value as $key1 => $value1)
                        {
                            if (is_array($value1)) 
                            {
                                echo "<br> ";
                                echo ++$key1. " ";
                                foreach ($value1 as $key2 => $value2) 
                                    {
                                        echo $key2.": ".$value2.", ";  
                                    }
                            }
                        }
                    }
                else
                { 
                    print_r($value);
                }
            }

        ?>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>