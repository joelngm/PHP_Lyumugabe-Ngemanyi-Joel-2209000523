<?php
// PHP: Handle form submission
$name = $age = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $age = htmlspecialchars($_POST["age"]);
    $phone = htmlspecialchars($_POST["phone"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Info Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 300px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            background: #e7f1ff;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <label>Phone:</label>
        <input type="text" name="phone" required>

        <input type="submit" value="Submit">
    </form>

    <?php if ($name && $age && $phone): ?>
    <div class="output">
        <strong>You entered:</strong><br>
        Name: <?php echo $name; ?><br>
        Age: <?php echo $age; ?><br>
        Phone: <?php echo $phone; ?>
    </div>
    <?php endif; ?>
</div>

</body>
</html>