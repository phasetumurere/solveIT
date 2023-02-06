<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$evenNumbers = array();
$oddNumbers = array();
$evenSum = 0;
$oddSum = 0;
$evenProduct = 1;
$oddProduct = 1;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        $evenNumbers[] = $numbers[$i];
        $evenSum += $numbers[$i];
        $evenProduct *= $numbers[$i];
    } else {
        $oddNumbers[] = $numbers[$i];
        $oddSum += $numbers[$i];
        $oddProduct *= $numbers[$i];
    }
}

echo "Even numbers: " . implode(", ", $evenNumbers) . " their sum is: " . $evenSum . "<br>";
echo "Even numbers: " . implode(", ", $evenNumbers) . " their Product is: " . $evenProduct . "<br>";
echo "Odd numbers: " . implode(", ", $oddNumbers) . " their sum is: " . $oddSum . "<br>";
echo "Odd numbers: " . implode(", ", $oddNumbers) . " their Product is: " . $oddProduct . "<br>";
