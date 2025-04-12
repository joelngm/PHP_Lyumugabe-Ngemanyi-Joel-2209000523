<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Form</title>
</head>
<body>
    <h1>Enter Your Password</h1>
    <form action="getpassword.php" method="post">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    // Display the password if it is submitted using POST method
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        echo "<h2>You entered: " . htmlspecialchars($password) . "</h2>";
    }
    ?>
</body>
</html>
