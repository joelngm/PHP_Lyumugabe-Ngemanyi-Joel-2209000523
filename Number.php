<!DOCTYPE html>
<html>
<head>
    <title>Add Two Numbers</title>
</head>
<body>

<h2>Addition of Two Numbers</h2>

<form method="post">
    Number 1: <input type="number" name="num1" required><br><br>
    Number 2: <input type="number" name="num2" required><br><br>
    <input type="submit" value="Add">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Calculate the sum
    $sum = $num1 + $num2;

    // Display the result
    echo "<h3>Result: The sum of $num1 and $num2 is $sum.</h3>";
}
?>

</body>
</html>