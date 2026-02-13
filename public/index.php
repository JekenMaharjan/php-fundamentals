<?php

// 1. Variables and Data Types

// Declare Variables
$name = "Jeken";
$age = 25;
$isMale = true;
$salary = 50000.50;

// Output
echo "Name :" . $name . "<br>"; // . for string concatenation
echo "Age :" . $age . "<br>";
echo "Male :" . ($isMale ? "Yes" : "No") . "<br>";
echo "Salary :" . $salary . "<br><br>";

// Data Type Checking
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($isMale);
echo "<br>";
var_dump($salary);

// ====================================================

// 2. Operators

// a. Arithmetic Operators
// Declare Variables
$a = 5;
$b = 12;

// Output for different Operators
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

// ------------------------

// b. Assignment Operators
$x = 3;

$x += 2; // 5
$x -= 1; // 4
$x *= 2; // 8
$x /= 4; // 2

echo "The value of X is " . $x;

// ------------------------

// c. Comparison Operators
$g = "5";
$h = 5;

var_dump($g == $h); // true
var_dump($g === $h); // false
var_dump($g != $h); // false
var_dump($g !== $h); // true

// ------------------------

// d. Logical Operators
$age = 25;
$isVerified = true;

if ($age > 18 && $isVerified) {
    echo "Access Granted!";
}

if ($age < 18 || !$isVerified) {
    echo "Access Denied!";
}

// ------------------------

// e. Ternary Operator
$marks = 60;

$result = ($marks >= 60) ? "Pass" : "Fail";

echo $result;

// ------------------------

// f. Null Coalescing Operator (Modern PHP)
$username = $_GET['username'] ?? "Guest";

echo $username;

// ------------------------

// g. Spaceship Operator (Advanced but Good to Know)
echo 5 <=> 10; // -1
echo 10 <=> 10; // 0
echo 15 <=> 10; // 1

// ====================================================

// 3. Conditionals

