<?php
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operations"];

      
    switch($operation){
        
        
        case "+":
            $result= $num1 + $num2;
            echo $num1 . " + " . $num2 . " = " . $result;
            break;
        
        case "-":
            $result= $num1 - $num2;
            echo $num1 . " - " . $num2 . " = " . $result;
            break;
        case "*":
            $result= $num1 * $num2;
            echo $num1 . " * " . $num2 . " = " . $result;
            break;
        case "/":
            $result= $num1 / $num2;
            echo $num1 . " / " . $num2 . " = " . $result;
            break;
        
    }

?>