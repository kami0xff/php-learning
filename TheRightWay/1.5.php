<?php
//Boolean data type

//true and false are case incensitive but true false are used most often
$isComplete = true;
$isComplete = TRUE;
$isComplete = false;
$isComplete = FALSE;

//things that are typed coerced into false
//integers 0 -0 == false
//floats 0.0 -0.0 == false
//string "" == false
//"0" == false
//[] == false
//null == false

var_dump((bool)"false"); // this will become true because "false" is not an empty string
var_dump((bool)"");
echo is_bool((bool) "false") . "<br>";
echo is_bool([]) . "<br>";
echo is_bool(0) . "<br>";
echo is_bool(-123.022) . "<br>";
echo is_bool("test") . "<br>";
//this is true so when we type cast is_xxx function will see the casted type
//but is_bool will always be false for the other "" [] 0 -0 1 234 "wewr"
//however when casted to bool some evaluate to true

//so i think that what happens is that when a variable is passed in a conditional
//for instance in the if below for instance here name is passed in the conditional and
//it will evaluate to true because it is not an empty string
//i think that there is a type casting in the conditional like (bool)$name because the conditional
//is an expression THAT MUST return a boolean value
$name = "jojo";
if($name){
    echo "success";
}else{
    echo "fail";
}

//a string 'false' evaluates to true for example because it is not an empty string

