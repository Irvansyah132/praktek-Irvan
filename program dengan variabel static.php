<?php

function varStatic() {
    static $x =1234;
    echo $x;
    $x++;
    echo "</br>";
}

varStatic();
varStatic();
varStatic();

?>