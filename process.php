<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    echo "<h2>Signup Successful</h2>";
    echo "Name: " . $fullname . "<br>";
    echo "Email: " . $email . "<br>";

} else {
    echo "Invalid request.";
}

?>