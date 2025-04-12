<!DOCTYPE html>
<html>
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
    if (isset($_GET['password'])) {
        $password = $_GET['password'];
        echo "<h2>You entered: " . htmlspecialchars($password) . "</h2>";
    }
    ?>
</body>
</html>
