<!-- 2.2 Write a PHP code for sorting an array entered by user.  -->

<!DOCTYPE html>
<html>
<head>
    <title>Array Sorting</title>
</head>
<body>

<form method="post">
    Enter array elements (comma separated):
    <input type="text" name="array" required>
    <input type="submit" value="Sort">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = explode(",", $_POST["array"]);

    foreach ($arr as &$value) {
        $value = trim($value);
    }

    sort($arr);

    echo "<h3>Sorted Array:</h3>";
    echo implode(", ", $arr);
}
?>

</body>
</html>