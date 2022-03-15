<?php
//operators
//an operator takes one or multiple expressions and results int a value

//Arithmetic operators (+ - * / % **)
//+- operators can be used as prefix to cast data but this looks quite confusing in the code
$x = +"10";
$y = -"10";

//divison by zero will cause fatal errors by prior to php 8 it will result in INF
    //in php 8 fdiv(x, y) will still give INF if division by 0 occurs

//The modulus operator is the remainder of x / y
    //it casts both of its operands into integer !
    //if you want perform mod on floating point number you need to use the fmod(x,y) functions
    //the sign of the result is taken from the number that we are dividing x/y if y is negative the result is positive

//Assignment operators (= += -= *= /= %= **=)
    //
$x = $y = 10;
$x = ($y = 10) + 5; // y = 10 x = 15

//string operators (. .=)
    //we have the concatenation operator and the concatenation operator combined with assignment

$s = "hello";
$s .= " World";
echo $s;

//comparison operators allow to compare two values to each other.
//(== === != <> !== < > <= >=   ?? ?:)
$x = 5;
$y = 3;
//in php you also have ===
echo $x == $y;
echo $x === $y;

// <> is the same as !=
//<=> space ship operator
    //returns 0 if x is equal to y
    //retuns -1 if x is smaller than y
    //returns 1 if x is greater than y
echo $x <=> $y;

//before php 8 when a string was compared to a number the string would be cast to a number before
//the comparison so for example (0 == "hello") would becomes (0 == (int)"hello") and strings that
//cannot be converted to a number are converted to 0 so we would get (0 == 0) which is true.
//in php 8 this conversion no longer occurs instead the 0 gets converted into a string and the comparison is done
//so (0 == "hello") becomes ("0" == "hello") which is false. (0 == "0") would still return true

//it is recommended to always use the strict type comparison
$x = "Hello world";
$y = strpos($x, 'H');
if($y == false){ //H in this program will never be found because y is 0 because H is at position 0
                 // and y gets converted to boolean so 0 gets converted to false
                 // if we used strict comparisons this bug would not occur.
    echo 'H not found';
}else{
    echo 'H found at index ' . $y;
}
$y == false ? "H not found" : "H found";

//?? is the null coalescing operator
$x = null;
$y = $x ?? "hello";
//above y will only be equal to hello if the variable x is null
//if x is not null then x is equal to whatever x is.
//this also works if x is undefined this is typically usefull for arrays that have undefined keys

//Error Control operator (@)
$x = @file('foo.txt'); //this file does not exist but we are suppresing the error with the @
//never use this

//increment decrement operator
$x = 5;
echo ++$x; //displays 6 because $x is incremented then the expression $x is evaluated.
echo $x++; //displays 5 because the expression $x is evaluated first then incremented.
//you can increment null values in php ...

//logical operators (&& || ! and or xor)
    //be careful for php type conversions

$x = true;
$y = false;

$z = $x and $y; //this is true strangely because the = has higher precedence than and
//short circuiting evaluation
var_dump($x || $y); // here php does not evaluate $y it sees that $x is true and determines
//that the expression will be true regardless of y

function hello(){
    echo "hello world";
    return false;
}
var_dump($x || hello()); //here hello does not get called
var_dump($y && hello() || $x); //here hello also does not get called

//Bitwise Operations
$x = 0b0111; //7
$y = 0b0011; //3

echo $x & $y; //3
echo $x | $y; //7
echo $x * $y; //4 this is the xor operator
//~ is the flip operator it will flip all the bits in the number
// >> shift to the right or division by 2
// << shift to the right or multiplication by 2

//both operands are converted to integers and the bitwise operations are performed on the ints
//apparently we can perform bit wise operations on strings and it works without converting the string
//there are usecases for storing flags and permissions for these.

//Array operators (+ == === != <> !==)
$x = ['a','b', 'c'];
$y = ['d', 'e', 'f'];

$z = $x + $y; //+ here computes the union of the two arrays and what that means is that
//take all the elements from y and append them to x if they don't exist at the same index or keys
//so in this the + operator would not do anything because the elements of y are at the same keys as x
//if we add some elements to y such that y has more elements then they will be appended to x because those
//keys are not alredy used in x

$x = ['a'=>1,'b'=>2, 'c'=>3];
$y = ['d'=>4, 'e'=>5, 'f'=>6];
$z = $x + $y; //changing them to associative arrays made it so that the keys of the elements in the y array
//are not the same as in the x array so the union will append all the elements of y to x; [1,2,3,4,5,6]

//comparison with arrays will return true if both arrays have the same key=>value pairs
echo $x == $y; //this will be false for example since they don't have the same key value pairs
//if we just have the keys matching it will still be false
//if we just have the values matching it will still be false
//the data type or order does not have to match with this loose comparison '2' and 2 would be considered
//the same values

echo $x === $y; //and if we add the strict comparison key->value pairs need to be the same
//as well as the data types of the values so '2' and 2 would not be considered the same value
//as well as the order of the key->value pairs

//same idea for the != and !== <>


//Execution Operators (``)
//used to execute shell commands from php

//Type Operators (instanceof)
echo "<br>";
//echo (instanceof 10);

//Nullsafe Operator - PHP8 (?)






