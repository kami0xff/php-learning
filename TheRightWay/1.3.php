<?php
$name = "joshua";
$name = "jojo";
$name = 2;
//here name becomes jojo then 2 in c++ you would get an error because you are redefining something multiple times
echo $name;

define("STATUS_PAID","PAID");
echo defined("STATUS_PAID"); //this can be used
echo STATUS_PAID; //you don't use the $ sign when using constants
const STATUS = "LEARNING"; //similar thing can be done with the const keyword

//THE VERY important difference is that constants created with teh const keyword are defined at compile time
//whilst define constants are defined at runtime

//for example this does not work with the const keyword because here NEWNAME is defined at runtime
if($name == 2){
//   const NEWNAME = "diego";
   define("NEWNAME", "diego");
}

//you can sort of define constants dynamically with variables
$status = "PENDING";
define("STATUS_$status", $status);
echo STATUS_PENDING; // this does give us some linting error but it will work


//PREDEFINED AND MAGIC CONSTANTS are available to us
echo PHP_VERSION;
//MAGIC CONSTANTS are constans but they can change depending when they are used
echo __LINE__;
echo __LINE__;


//Variable variables
$foo = 'bar';
$$foo = 'baz';
echo $foo, $bar; //bar defined :)
//variable variables takes the value of the variable and treats it as the new name of the variable
//so here we did not define $$foo we actually defined $bar = 'baz'
//pretty much its just making a variable from the result of an expression
//this can be usefull to create our variables dynamically

