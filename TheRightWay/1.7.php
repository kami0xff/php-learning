<?php
$x = 13.5;
//we can also represent floating point numbers in exponential form
$x = 13.5e3; // = 13500
$x = 13.5e-3; // = 0.0135

//just like with integers you can add underscores to make large numbers more readable
$x = 13_000.5e3; // = 13500

//just like integer the size of the floating point numbers depend on the platform
echo PHP_FLOAT_MAX;

//in programming we always need to be aware of floating point precision
//for instance

$x = floor((0.1 + 0.7) * 10); //we expect 8
//this is because we we convert our numbers into floating binary point number we lose some precision not a lot
//the result of the calculation is like 7.999999999999123 but the floor function will round this number down to 7
echo $x, "<br>"; //but what we get is 7

//another example but when rounding up
$x = ceil((0.1+0.2)*10); //we expect to get 3
echo $x, "<br>"; //we get 4


//so what should we remember well we should never trust floating point numbers to the last digit
//and we should never compare floating point numbers directly for equality

$x = 0.23;
$y = 1 - 0.77;
//both of these values should be equal right
if($x === $y){
    echo "same" . "<br>";
}else{
    echo "different" . "<br>"; //the if condition actually fails they are not the same
}

//some operation might result in some undefined value this will result in a constant NAN
//for example log(-1)
echo NAN;
//there is also a constant INF which happens we you out of bound of float
echo PHP_FLOAT_MAX * 2;

//NEVER COMPARE A VALUE DIRECTLY to infinity or nan to check if a value if infinity or nan
//instead we need to use the inbuilt function is_nan and is_infinite or is_finite otherwise it might lead to strange behavior


//CASTING TO FLOAT
$x = 12;
var_dump($x);
var_dump((float)$x);
var_dump(floatval($x)); //same effect but its less efficient calling an extra function

//again if a string can be represented as a number and is numeric it will be converted to a float otherwise if the
//string is not numeric and cannot be represented as a number then the result of casting is 0
$x= (float)"1.23";
$x= (float)"1324";
$x= (float)"awe24";
echo $x . "<br>";
