<?php

// Ukol A

for($i = 1; $i < 8; $i++) {
    echo $i;
    echo "<br>";
}

echo "<br>";

// Ukol B

for($i = 2; $i <= 20; $i+=2) {
    echo $i;
    echo "<br>";
}

echo "<br>";

// Ukol B Bonus

for($i = 2; $i <= 20; $i++) {
    if(($i % 2) == 0) {
        echo $i;
        echo "<br>";
    }
}

echo "<br>";

// Ukol C

$number = 7;

for($i = 1; $i <= 10; $i++) {
    echo $number . " x " . $i . " = " . ($number*$i);
    echo "<br>";
}

echo "<br>";

// Ukol D

$sum = 0;

for($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

echo $sum;


?>
