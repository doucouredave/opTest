<?php

//Using refernce of variable
$a = "foobar";
$b = &$a;
$c = $b;
$c = 1;

echo "<h3>Using refernce of variable</h3><hr>";
echo "c = ".$c."<hr>";
echo "b = ".$b."<hr>";
echo "a = ".$a."<hr>";


// case of table variable
$d = array("foo"=>"bar", 1 => 82);
$e = $d["foo"];
$f = &$d[1];
$f = 'dvp';
unset($d);

echo "<h3>Case of table variable</h3><hr>";
echo "f = ".$f."<hr>";
echo "e = ".$e."<hr>";

//memory Leak
$a = array("foo"=>"bar", 1 => 82);
$a[] = &$a;
unset($a);

//Using function
function foo(&$var){
	$var = "bar";
	return $var;
}

$a = "foobaz";
$b = foo($a);
