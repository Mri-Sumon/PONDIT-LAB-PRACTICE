<?php
    namespace JsonCalculator\calculatorClassFolder;

    class Calculator
    {
       public $a = null;   //@ use for remove warning.
       public $b = null;   //$x এ আসবে $num1 এর ভ্যালু এবং $y এ আসবে $num2 এর ভ্যালু
       
       public $subt = null;
       public $Pls = null;
       public $Mns = null;
       public $Mltp = null;
       public $Dvsn = null;
       public $Mdls = null;
        
       //এখানে this এই ক্লাস এর অবজেক্ট, যেমনটা আমাদের অন্য পেজ থেকে ক্লাস কল করলে অবজেক্ট ক্রিয়েট করতে হয়। 
       public function __construct($x, $y, $m, $n, $o, $p, $q, $r)
            {        
               @$this-> $a = $x;               
               @$this-> $b = $y;

               @$this-> $subt = $m;
               @$this-> $Pls = $n;
               @$this-> $Mns = $o; 
               @$this-> $Mltp = $p;
               @$this-> $Dvsn = $q;
               @$this-> $Mdls = $r;
            }
        
        // ম্যাজিক ম্যাথড কোনো কিছু রিটার্ন করে না। তাই রিটার্ন করার জন্য আমাদের আলাদা ফাংশন ক্রিয়েট করতে হয়।
        public function calculate()
            {
                $result = @$this-> $a + @$this-> $b;
                return $result ?? 0;
            }
    }                                                  
?>