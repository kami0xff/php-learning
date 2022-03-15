<?php
declare(strict_types=1);
//php is dynamically typed and we are not required to declare the type of our variable
// dynamically typed === type checkign at runtime
// static typing === type checking at compile time
//  in php we have

//SCALAR TYPES
//boolean - true / false
//integer 1, 3, 4, -1, -2 ...
//float 0.3, 1.2, -1.4 ...
//string "joshua" / 'joshua'

//SPECIAL TYPES
//resource
//null this means no value


$completed = true;
$score = 133;
$price = 0.4;
$name = "joshua";

//a boolean is echoed as 1 when true and as nothing when false
echo is_bool($completed), "<br>";
echo is_integer($score), "<br>";
echo is_float($price), "<br>";
echo is_string($name), "<br>";

//gettype is another way to get the type fo a variable
echo gettype($completed), "<br>";
echo gettype($score), "<br>";
echo gettype($price), "<br>";
echo gettype($name), "<br>";

//vardump gives us the type and the value of the variable
var_dump($completed);
var_dump($score);
var_dump($price);
var_dump($name);


//COMPOUND TYPES
//array
//object
//callable
//iterable

//arrays in php can contain multiple types at the same time as well as have key value pairs mixed with normal indices they are overall very
//flexible but this is not very desirable in some cases

$companies = [1, 2, 3, 0.5, true, "joshua"];
echo $companies; //this will just print the word array and give a notice that we are trying to convert an array to string
print_r($companies); // this will give more details and print the elements in the array
echo "<br>";
echo "<br>";

//but how does php know that $score is an integer this happens because during runtime php will automatically determine the datatype
//in php you cannot type int variables in global scope like this but parameters of a function and properties of classes can be type hinted in php

//this function is not type hinted and x and y could be anything in this case like a string and an integer
//which will result in a fatal error unsupported string+int if the string cannot be coerced into an integer

function sum($x, $y){
    echo $x + $y;
    echo "<br>";
}
//sum("joshua",2); error
sum('2',4); // this will work because of type coercion the '2' is converted to int


function sumTyped(int $x, int $y){
    echo $x + $y;
    echo "<br>";
}
sumTyped("joshua",2); // in this case php cannot do the type coercion (surprised phpstorm does not lint this)
//ok so php storm will only give linting error if we declare(strict_types = 1 at the top of the document)

//but this will throw an error saying that it expected a type of int and got a string
sumTyped('2',4); //this again will still work and its a bit stupid that it does the '2' is coerced
//with declare(strict_types=1) the '2' is not coerced into an int and the program throws an error as it should.

//however nothing is perfect and this stil works
//if we expect two floats we can pass two ints
//if we expect two ints we can't pass two floats
sumTyped(3,3);
sumTyped(3.2,3.4);

//TYPECASTING
$x = (float)5;
$y = (int)'5';

