<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./Calc_icon.png">
</head>

<body>


<div class="calc">
        <form action="" method="POST">
            <div class="input">
                <input type="text" id="inp" name="display">
            </div>
            <div class="row">
                
                <input type="button" class="key" value="C" name="clear" onclick="display.value = '' ">
                <input type="button" class="key" value="&leftarrow;" name="del"      
                
                onclick="display.value = display.value.toString().slice(0,-1)">  
                <input type="button" value="%" name="mod" onclick="display.value +='%'">
                <input type="button" value="/" name="/" onclick="display.value +='/'">

            </div>


            <!-- Button -->

            <div class="row">
                <input type="button" value="7" name="7" onclick="display.value+='7'">
                <input type="button" value="8" name="8" onclick="display.value+='8'">
                <input type="button" value="9" name="9" onclick="display.value+='9'">
                <input type="button" value="*" name="x" onclick="display.value+='*'">

            </div>
            <div class="row">
                <input type="button" value="4" name="4" onclick="display.value+='4'">
                <input type="button" value="5" name="5" onclick="display.value+='5'">
                <input type="button" value="6" name="6" onclick="display.value+='6'">
                <input type="button" value="&minus;" name="-" onclick="display.value+='-'">

            </div>
            <div class="row">
                <input type="button" value="1" name="1" onclick="display.value +='1'">
                <input type="button" value="2" name="2" onclick="display.value +='2'">
                <input type="button" value="3" name="3" onclick="display.value +='3'">
                <input type="button" value="+" name="+" onclick="display.value +='+'">

            </div>
            <div class="row">
                <input type="button" value="0" name="0" onclick="display.value +='0'">
                <input type="button" value="." name="." onclick="display.value +='.'">
                <input style="width:150px " type="button" class="eql" value="=" name="=" onclick="display.value = eval(display.value)">
            </div>
        </form>
    </div>


</body>
</html>



<?php
    // Handle form submission and potential errors
    if (isset($_GET['submit'])) {
        // Validate input
        $result1 = filter_var($_GET['num1'], FILTER_VALIDATE_FLOAT);
        $result2 = filter_var($_GET['num2'], FILTER_VALIDATE_FLOAT);
        $operator = $_GET['operator'];

        if ($result1 === false || $result2 === false) {
            // Handle invalid input
            echo "<p>Error: Please enter valid numbers.</p>";
        } 
        
        else {
            if ($operator === '/') {
                if ($result2 === 0) {
                    // Handle division by zero
                    echo "<p>Error: Division by zero is not allowed.</p>";
                } 
                
                else {
                    $result = $result1 / $result2;
                    echo "<p>The answer is: $result</p>";
                }
            } 
            
            else {
                // Perform calculation
                switch ($operator) {
                    case '+':
                        $result = $result1 + $result2;
                        break;
                    case '-':
                        $result = $result1 - $result2;
                        break;
                    case '*':
                        $result = $result1 * $result2;
                        break;
                }
                echo "<p>The answer is: $result</p>";
            }
        }
    }
    ?>

