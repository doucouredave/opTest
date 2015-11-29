<?php

$a = "foobar";
$b = &$a;
$c = $b;
$c = 1;

echo "c = ".$c;
echo "b = ".$b;
echo "a = ".$a;