<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>

<body>
<h2>speak number</h2>
<form method="post">
    <input type="number" name="number" placeholder="Nhập so can doc"/>
    <input type="submit" id="submit" value="Read"/>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    if ($number < 10) {
        switch ($number) {
            case 1;
                echo one;
                break;

            case 2;
                echo two;
                break;

            case 3;
                echo three;
                break;

            case 4;
                echo four;
                break;

            case 5;
                echo five;
                break;

            case 6;
                echo six;
                break;

            case 7;
                echo seven;

                break;
            case 8;
                echo eight;

                break;
            case 9;
                echo nine;
                break;

            case 0;
                echo zero;
                break;

        }
    }
    if ($number < 20 && $number >= 10) {
        switch ($number) {
            case 10:
                echo ten;
                break;
            case 11:
                echo eleven;
                break;
            case 12:
                echo twelve;
                break;
            case 13:
                echo thirteen;
                break;
            case 14:
                echo fourteen;
                break;
            case 15:
                echo fithteen;
                break;
            case 16:
                echo sixteen;
                break;
            case 17:
                echo seventeen;
                break;
            case 18:
                echo eightteen;
                break;
            case 19:
                echo nineteen;
                break;


        }

    }

}