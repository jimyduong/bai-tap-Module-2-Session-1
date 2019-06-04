<?php
echo "2"." ";

for ($i = 3; $i < 100; $i++) {
    $flag = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $flag = false;
        }
    }
    if ($flag) {
        echo $i." ";
    }
}


