<?php
session_start(); // Start the session

// Destroy the session to log out the user
session_destroy();
// Redirect to the login page or any other page
header("Location: login.php");
exit(); // Ensure no further code is executed after the redirect


