<?php
$count=0;
$l=3;
$c=3;
$teste = $l % $c;
$a=0;
while ($a <= 10) {
    if ((($l - $count) % $c) == 0) {
        echo($teste);
    }
    $count++;
    $a++;
}

