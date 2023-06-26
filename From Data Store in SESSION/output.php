<?php
    session_start();

    function display($item){
    echo "<pre>";
    print_r($item);
    echo "<pre>";
    }

    display($_SESSION);          //SESSION এর ডাটা গুলা প্রিন্ট হবে।
    echo "<br>";


    echo $_SESSION['userName'];       //name print করবে।
    echo "<br>";
    echo $_SESSION['userEmail'];
    echo "<br>";
    echo $_SESSION['userPassword'];
    echo "<br>";
    print_r($_SESSION['useroHobbies']); //চেক বক্স এরের কাজ করে তাই print_r ব্যবহার করবো।
?>