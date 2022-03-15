<?php
//Integers
//whole numbers and negative number without a decimal point
//the size of integers depends on the platform

echo PHP_INT_MAX . "<br>";
echo PHP_INT_MIN  . "<br>";

$decimal = 7;
$binary = 0b1101; //binary/
$hex = 0xFF; //hex
$octal = 05;

//with the prefixes 0b its possible to write out integers in binary
//with  0x its possible to write integers in hexadecimal


//when we echo binary or hex they are converted to decimal
echo $decimal . "<br>";
echo $binary  . "<br>";
echo $hex  . "<br>";
echo $octal . "<br>";

//integer overflow in php
$x = PHP_INT_MAX + 1;
//when an integers goes out of bound it is casted to a float data type
//a bit like a scientific notation number 9.xx * 10 to the power of n

$x = (int) true; //boolean true when casted to int becomes 1
$x = (int) false; //boolean false when casted to int becomes 0

$x = (int) 5.34; //floats casted to int get truncated and lose their decimal part
$x = (int) "234"; //strings that can easily be changed into int change into an int
$x = (int) "234.89"; //strings that can be resolved to an integer but with a float has its decimal part truncated as well just like a normal float
$x = (int) "234joshua"; //strings that contain numbers as well as text, php will attempt to cast them into int and get the numeric part
                        //this only works if the number is at the start of the string
$x = (int) "joshua"; //if the string cannot be resolved as integer then the cast results in 0 it does not fail interestingly
$x = (int) "2341123123 string of text";
$x = (int) null; // null converted to int results in 0

//you can use underscores to make integer number more readable if they are very large
$x = 20_000;
//but if you convert strings with numbers containing underscores to int you will only get the number until the first underscore
$x = (int)"20_000";

echo $x;

