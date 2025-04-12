<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP String Manipulation Examples</title>
</head>
<body>

<h2>PHP String Manipulation Examples</h2>
<form method="post" action="">
    <label for="inputString">Enter a string:</label><br>
    <input type="text" id="inputString" name="inputString" placeholder="Type a string here" required>
    <br><br>
    <input type="submit" value="Process String">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input string from the form
    $inputString = $_POST['inputString'];
    
    // Display the original string
    echo "<h3>Original String:</h3>";
    echo "<p>$inputString</p>";

    // Convert to lowercase
    $lowercaseString = strtolower($inputString);
    echo "<h3>Lowercase:</h3>";
    echo "<p>$lowercaseString</p>";

    // Convert to uppercase
    $uppercaseString = strtoupper($inputString);
    echo "<h3>Uppercase:</h3>";
    echo "<p>$uppercaseString</p>";

    // Capitalize the first character of the string
    $ucfirstString = ucfirst($inputString);
    echo "<h3>Capitalize First Character:</h3>";
    echo "<p>$ucfirstString</p>";

    // Capitalize the first letter of each word
    $ucwordsString = ucwords($inputString);
    echo "<h3>Capitalize First Letter of Each Word:</h3>";
    echo "<p>$ucwordsString</p>";

    // Reverse the string
    $reversedString = strrev($inputString);
    echo "<h3>Reversed String:</h3>";
    echo "<p>$reversedString</p>";

    // Get the string length
    $stringLength = strlen($inputString);
    echo "<h3>String Length:</h3>";
    echo "<p>$stringLength</p>";

    // Replace a substring (for example, replacing 'a' with '@')
    $replacedString = str_replace("a", "@", $inputString);
    echo "<h3>Replace 'a' with '@':</h3>";
    echo "<p>$replacedString</p>";
}
?>

</body>
</html>