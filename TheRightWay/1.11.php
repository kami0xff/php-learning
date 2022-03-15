<?php
//Expressions
//expressions are pretty much anything that has a value or evaluates to a value
//constants variables and literal values

$x = 5; //5 here is a literal value that evaluates to 5 and therefore is an expression
$y = $x; //in this case x evaluates to 5 and is also an expression

$z = $x === $y; //$x === $ y is an expression because it evaluates to a boolean value

//functions are also considered expressions because they often return a value

$z = sum($x, $y);

//this conditional is also an expression as it evaluates to a boolean
if($x < 5){
    echo "hello";
}


