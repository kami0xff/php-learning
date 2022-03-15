<?php
//NULL
//null represents a variable with no value
//This can happen when the variable has been set to null when it is not defined/initialized yet or it has been unset

//null when casted to a string gives us an empty string ""

$x = null;

var_dump($x === null);
echo is_null($x);
var_dump($y); //var dumping an undefined variable sets y to null and gives us a warning
unset($x);
var_dump($x); //again x is not defined after unset

echo "<br>";
$x = null;
var_dump((string) $x); //""
echo "<br>";
var_dump((int) $x); //0
echo "<br>";
var_dump((float) $x); //0.0
echo "<br>";
var_dump((bool) $x); //false



//empty()
