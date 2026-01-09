<?php

$total = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST['first'];
    $num2 = $_POST['second'];
    $operation = $_POST['operation'];

    if ($operation == '+') {
        $total = $num1 + $num2;
    } elseif ($operation == '-') {
        $total = $num1 - $num2;
    } elseif ($operation == '*') {
        $total = $num1 * $num2;
    } elseif ($operation == '/') {
        if ($num2 == 0) {
            echo "Cannot divide by zero";
        } else {
            $total = $num1 / $num2;
        }
    } else {
        $error = "Invalid operation";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>SIMPLE CALCULATOR</h1>
<div class="container">
    <form class="form-group" method="post">
        <div class="input-boxes">
            <label for="first">Enter the First Number: </label><input id="first" name="first" type="number" placeholder="1..2...3...4"><br>
            <label for="second">Enter the Second Number: </label><input id="second" name="second" type="number" placeholder="5..6..7..8"><br>
            <label for="total">TOTAL</label><input id="total" name="total" type="number" placeholder="The Answer is..." value="<?php echo $total; ?>">
        </div>
        <div class="operations">
            <select name="operation" required>
                <option value="+" <?php echo (isset($_POST['operation']) && $_POST['operation'] == '+') ? 'selected' : '' ?>>
                    +
                </option>
                <option value="-" <?php echo (isset($_POST['operation']) && $_POST['operation'] == '-') ? 'selected' : '' ?>>
                    -
                </option>
                <option value="*" <?php echo (isset($_POST['operation']) && $_POST['operation'] == '*') ? 'selected' : '' ?>>
                    *
                </option>
                <option value="/" <?php echo (isset($_POST['operation']) && $_POST['operation'] == '/') ? 'selected' : '' ?>>
                    /
                </option>
            </select>
            <button class="button" type="submit" id="button">SUBMIT</button>
        </div>
    </form>
</div>

</body>
</html>
