<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body> 
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

        echo "<hr>";

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
        echo "<br>";

        // ------------------------

        // c. Comparison Operators
        $g = "5";
        $h = 5;

        var_dump($g == $h); // true
        echo "<br>";
        var_dump($g === $h); // false
        echo "<br>";
        var_dump($g != $h); // false
        echo "<br>";
        var_dump($g !== $h); // true
        echo "<br>";

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
        echo "<br>";

        // ------------------------

        // e. Ternary Operator
        $marks = 60;

        $result = ($marks >= 60) ? "Pass" : "Fail";

        echo $result;
        echo "<br>";

        // ------------------------

        // f. Null Coalescing Operator (Modern PHP)
        $username = $_GET['username'] ?? "Guest";

        echo $username;
        echo "<br>";

        // ------------------------

        // g. Spaceship Operator (Advanced but Good to Know)
        echo 5 <=> 10; // -1
        echo "<br>";
        echo 10 <=> 10; // 0
        echo "<br>";
        echo 15 <=> 10; // 1

        echo "<hr>";

        // ====================================================

        // 3. Conditionals

        $mark = 75;

        if ($mark >= 80) {
            echo "Distinction!";
        } elseif ($mark >= 70) {
            echo "First Division!";
        } elseif ($mark >= 60) {
            echo "Second Division!";
        } else if ($mark >= 50) {
            echo "Third Division!";
        } else {
            echo "Failed!";
        }

        echo "<hr>";

        // ====================================================

        // 4. Loops

        for ($i = 1; $i <= 5; $i++) {
            echo "Number: $i <br>";
        }

        echo "<hr>";

        $numbers = [10, 20, 30];

        echo "The array numbers are: <br>";
        foreach ($numbers as $num) {
            echo $num . "<br>";
        }

        echo "<hr>";

        // ====================================================

        // 5. Functions

        $path = __DIR__ . "/../src/functions.php";

        if (file_exists($path)) {
            echo "File found!";
        } else {
            echo "File NOT found!";
        }

        echo "<br>";
        echo "<br>";

        require_once __DIR__ . "/../src/functions.php";

        echo calculateSum(10,20);
        echo "<br>";
        echo isEven(4) ? "Even" : "Odd";

        echo "<hr>";

        // ====================================================

        // 6. Arrays

        $path = "../src/functions.php";

        if (file_exists($path)) {
            echo "File found!";
        } else {
            echo "File NOT found!";
        }

        echo "<br><br>";

        require_once "../src/arrays.php";

        echo "INDEXED ARRAYS <br>";
        echo indexedArrays();

        echo "<br>";

        echo "ASSOCIATIVE ARRAYS <br>";
        echo associativeArrays();

        echo "<br>";

        echo "MULTIDIMENSIONAL ARRAYS <br>";
        echo multidimensionalArrays();

        echo "<br>";

        echo "IMPORTANT ARRAY FUNCTIONS <br>";
        echo importantArrayFunctions();

        echo "<br>";

        echo "SORTING ARRAYS <br>";
        echo sortingArrays();

        echo "<hr>";

        // ====================================================

        // 7. Superglobals ($_GET, $_POST, $_SERVER)

        require_once "../src/superglobals.php";

        // $_GET (Data from URL)
        echo "SUPER GLOBALS - GET <br>";
        echo superglobalsGET();
        // TEST -> http://localhost:8000/?name=Jeken&age=25

        echo "<br><br>";

        // $_POST (Get Data From Form)
        echo "SUPER GLOBALS - POST <br>";

        ?>

        <form method="POST">
            <input type="text" name="email" placeholder="Enter Email">
            <button type="submit">Submit</button>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST['email'] ?? "";
            echo "Submitted Email: " . htmlspecialchars($email);
        }

        echo "<br><br>";

        // $_SERVER (Request Information)
        echo "SUPER GLOBALS - SERVER <br>";
        echo superglobalsSERVER();

        echo "<hr>";

        // ====================================================

        // 8.

        echo "<hr>";

        // ====================================================

        // 9.

        echo "<hr>";

        // ====================================================

        // 10.

        echo "<hr>";

        // ====================================================

        // 11.

        ?>
    </body>
</html>