<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = floatval($_POST['firstNumber']);
    $calculator = $_POST['Operand'];
    $second = floatval($_POST['SecondOperand']);

    class cal
    {
        public $first;
        public $calculator;
        public $second;

        function __construct($first, $calculator, $second)
        {
            $this->first = $first;
            $this->calcu = $calculator;
            $this->second = $second;
        }

        function calculator()
        {
            return eval ('return ' . $this->first . $this->calcu . $this->second . ";");
        }
    }

    $tinh = new cal($first, $calculator, $second);
}
?>
<!doctype html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<form method="post">
    <h1>Simple Calculator</h1>
    <div style="border-bottom-width: 12px">
        First operand: <input type="number" name="firstNumber">
        <br>
        Operand:
        <select name="Operand">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        SecondOperand:
        <input type="number" name="SecondOperand">
        <br>
        <input type="submit" value="Calculator">
    </div>
    <h2>Result: </h2>
    <?php if ($tinh->second != 0 && $tinh->calcu != '/') {
        echo $tinh->calculator();
    } else {
        echo "edit SecondOperand#0 vs division ";
    } ?>
</form>
</body>
</html>