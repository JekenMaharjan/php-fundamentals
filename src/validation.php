<?php

function validateForm() {
    $name = "";
    $email = "";
    $errors = "";
    $success = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $name = trim($_POST["name"] ?? "");
        $email = trim($_POST["email"] ?? "");

        // Validation
        if ($name === "" || $email === "") {
            $errors = "Please fill all fields!";
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors = "Invalid email format!";
        }

        if (empty($errors)) {
            $success = "Successfully Submitted Form!";
        }
    }
    return [$name, $email, $errors, $success];
}
