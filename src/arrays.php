<?php

// 1. Indexed Arrays

function indexedArrays() {
    $numbers = [10, 20, 30, 40];

    echo $numbers[0] . "<br>";
    echo $numbers[2] . "<br>";

    foreach ($numbers as $number) {
        echo "Value: $number <br>";
    }
}

// ====================================================

// 2. Associative Arrays

function associativeArrays() {
    $user = [
        "name" => "Jeken",
        "email" => "jeken@gmail.com",
        "age" => 25
    ];

    echo "Name : " . $user["name"] . "<br>";
    echo "Email : " . $user["email"] . "<br>";
    echo "Age : " . $user["age"] . "<br>";
}

// ====================================================

// 3. Multidimensional Arrays

function multidimensionalArrays() {
    $users = [
        [
            "name" => "Ram",
            "email" => "ram@example.com"
        ],
        [
            "name" => "Shyam",
            "email" => "shyam@example.com"
        ]
    ];

    foreach ($users as $user) {
        echo "Name : " . $user["name"] . " ----- " . "Email : " . $user["email"] . "<br>";
    }
}

// ====================================================

// 4. Important Array Functions

function importantArrayFunctions() {
    $numbers = [10, 20, 30, 40];
    // count()
    echo count($numbers);
    echo "<br>";

    // array_push()
    array_push($numbers, 50);
    echo "Number is pushed into Array..";
    echo "<br>";

    // in_array()
    if (in_array(20, $numbers)) {
        echo "Found the Number!";
    }
    echo "<br>";

    // array_merge()
    $array1 = [1, 2];
    $array2 = [3, 4];
    $result = array_merge($array1, $array2);
    print_r($result);
    echo "<br>";

    // array_filter()
    $evenNumbers = array_filter($numbers, function ($num) {
        return $num % 2 === 0;
    });
    print_r($evenNumbers);
    echo "<br>";
}

// ====================================================

// 5. Sorting Arrays

function sortingArrays() {
    $numbers = [10, 40, 20, 30];

    sort($numbers); // Ascending
    print_r($numbers);

    echo "<br>";

    rsort($numbers); // Descending
    print_r($numbers);

    echo "<br>";

    $user = [
        "name" => "Jeken",
        "email" => "jeken@gmail.com",
        "age" => 25
    ];

    asort($user);     // Sort associative by value
    print_r($user);
    
    echo "<br>";

    ksort($user);     // Sort associative by key
    print_r($user);
}