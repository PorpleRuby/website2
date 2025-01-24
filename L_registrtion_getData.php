<?php
session_start();
include('db_connect.php');

if (isset($_POST['register_submitBtn'])) {
    // Retrieve data from the form
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate the password and confirmation
    if ($password === $confirmPassword) {
        // Prepare the data to be processed or stored
        $postData = [
            'full_name' => $fullName,
            'email' => $email,
            'password' => $password // Consider hashing this for security
        ];

        // Example: Output data for debugging (remove in production)
        echo "Registration successful! <br>";
        echo "Full Name: " . htmlspecialchars($postData['full_name']) . "<br>";
        echo "Email: " . htmlspecialchars($postData['email']) . "<br>";
        // Never display the password or sensitive data
    } else {
        echo "Passwords do not match!";
    }

    $users_table = "user_accounts";
    $postRef_result = $database->getReference($users_table)->push($postData);

    if($postRef_result) {
        $_SESSION['status'] = "Signup was successful";
        header("Location: L_login.php");
    } else {
        $_SESSION['status'] = "Signup failed";
        header("Location: L_login.php");
    }
}
