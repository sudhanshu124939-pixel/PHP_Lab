<!-- 2.5 Write a PHP code for user define function for calculator, take input from user by creating simple html form. -->

<?php
function calculate($num1, $num2, $operator)
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num2 != 0 ? $num1 / $num2 : 'Cannot divide by zero';
        default:
            return 'Invalid operator';
    }
}

$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = (float) ($_POST['num1'] ?? 0);
    $num2 = (float) ($_POST['num2'] ?? 0);
    $operator = $_POST['operator'] ?? '+';
    $result = calculate($num1, $num2, $operator);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>

<body>
    <h2>Simple PHP Calculator</h2>
    <form method="post">
        <label>Number 1:</label>
        <input type="number" name="num1" step="any" required>
        <br><br>

        <label>Operator:</label>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br><br>

        <label>Number 2:</label>
        <input type="number" name="num2" step="any" required>
        <br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php if ($result !== ''): ?>
        <h3>Result: <?php echo htmlspecialchars((string) $result); ?></h3>
    <?php endif; ?>
</body>

</html>