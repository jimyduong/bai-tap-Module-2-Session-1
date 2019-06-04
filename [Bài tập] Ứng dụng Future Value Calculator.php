<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>

<body>
<h2>Tinh lai suat</h2>
<form method="post">
    <input type="number" name="InventmentAmount" placeholder="Nhập so tien ban dau"/>
    <input type="text" name="YearlyInterestRate" placeholder="Nhap lai suat nam"/>
    <input type="number" name="NumberofYears" placeholder="Nhap so nam"/>
    <input type="submit" value="Tinh">
</form>
</body>
</html>

<?php
$amount=$_POST["InventmentAmount"];
$rate=$_POST["YearlyInterestRate"];
$year=$_POST["NumberofYears"];
$money=$amount+($amount*$rate)*$year;
echo "so tien la ".$money;
?>