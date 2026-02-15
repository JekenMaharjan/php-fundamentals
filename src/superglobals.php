<?php

// 1. $_GET (Data from URL)

function superglobalsGET() {
    $name = $_GET['name'] ?? "Guest";
    $age = $_GET['age'] ?? "Not provided";

    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Age: " . htmlspecialchars($age);
}

// ====================================================

// 2. $_POST (Get Data From Form)

// ====================================================

// 3. $_SERVER (Request Information)

function superglobalsSERVER() {
    echo "Request Method: " . $_SERVER["REQUEST_METHOD"] . "<br>";
    echo "Server Name: " . $_SERVER["SERVER_NAME"] . "<br>";
    echo "User Agent: " . $_SERVER["HTTP_USER_AGENT"] . "<br>";
}