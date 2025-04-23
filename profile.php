<?php
session_start(); // Start the session

require_once 'connect.php'; // Include your database connection file

$user_id = $_SESSION['user_id'] ?? null; // Get the user ID from the session

if (!$user_id) {
    // If the user is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}

// Fetch user information from the database
$stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
$stmt->bindParam(':id', $user_id);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        .profile-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="bg-light">

<div class="container">
    <div class="profile-container text-center">
        <img src="./uploads/<?php echo htmlspecialchars($user['image']); ?>" alt="Profile Image" class="profile-image">
        <h1 class="mt-3"><?php echo htmlspecialchars($user['name']); ?></h1>
        <p class="text-muted">Email: <?php echo htmlspecialchars($user['email']); ?></p>
        <form action="logout.php" method="POST" class="mt-4">
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>