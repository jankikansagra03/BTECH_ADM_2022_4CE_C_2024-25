<?php
echo "hello";
$a = 50;
$b = "20";
$b = $a / $b;
echo "<br>" . "Value of variable =" . $b;

echo "<h1 style='color:red;'>heading</h1>";

if ($a == 0) {
    echo "Number is 0";
} else if ($a > 0) {
    echo "Positive number";
    if ($a % 2 == 0) {
        echo "Even number";
    } else {
        echo "Odd number";
    }
} else {
    echo "Negative number";
}


