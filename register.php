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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>
    <form method="POST" action="register.php" enctype="multipart/form-data" >
        <div class="mb-3">
            <label for="username" class="form-label">Pseudo</label>
            <input type="text" class="form-control" id="username" aria-describedby="username">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Pseudo</label>
            <input type="file" class="form-control" id="image" aria-describedby="image">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>