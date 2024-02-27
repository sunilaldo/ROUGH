<?php
// Replace 'your_username' and 'your_password' with your actual credentials
$validUsername = 'your_username';
$validemail = 'your_email';
$validpassword = 'your_password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredUsername = $_POST['username'];
    $enteredemail = $_POST['email'];
    $enteredPassword = $_POST['password'];

    // Validate credentials
    if ($enteredUsername === $validUsername && $enteredemail === $validemail && $enteredpassword === $validpassword) {
        // Redirect to index.html
        header('Location: index.html');
        exit();
    } else {
        // Display error message using JavaScript alert and redirect to login page
        echo '<script>';
        echo 'alert("Invalid username or password. Please try again.");';
        echo 'window.location.href = "index.html";'; // Redirect to login page
        echo '</script>';
    }
}
?>