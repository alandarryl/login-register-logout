<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Here you would typically check the credentials against a database
        if ($username == "admin" && $password == "password") {
            echo "<p>Login successful!</p>";
        } else {
            echo "<p>Invalid username or password.</p>";
        }
    }
    ?>

