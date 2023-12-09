<?php
function sumOfDigits($number) {
    $numberStr = (string)$number; // Convert the number to a string
    $sum = 0;

    for ($i = 0; $i < strlen($numberStr); $i++) {
        $digit = intval($numberStr[$i]); // Convert the character to an integer
        $sum += $digit;
    }

    return $sum;
}

$number = 12345; // Replace this with the number you want to compute the sum for

$digitSum = sumOfDigits($number);

echo "Sum of the digits of $number is: $digitSum\n";
?>
