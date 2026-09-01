<!-- 1.8  Write a PHP Program to reverse an array values entered by user. -->

<!DOCTYPE html>
<html>
<head>
    <title>Reverse Array</title>
</head>
<body>

<form method="post">
    Enter array values (comma separated):
    <input type="text" name="values" required>
    <input type="submit" value="Reverse">
</form>

<?php
if (isset($_POST['values'])) {
    $array = explode(",", $_POST['values']);
    $reverse = array_reverse($array);

    echo "<h3>Original Array:</h3>";
    print_r($array);

    echo "<h3>Reversed Array:</h3>";
    print_r($reverse);
}
?>

</body>
</html>