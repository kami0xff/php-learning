<?php
//operator precedence and associativity
//when multiple operators are used in an expression they are grouped by precedence
//if they have the same precedence then their associativity decides how they are grouped

$x = 5 + 3 * 5; //multiplication has higher precedence than addition or subtraction
//there 3 and 5 get grouped first
//then 5 + 15
//the assignment operator has one of the lowest precedence

//we can use parenthesis to force precedence
$x = (5+3)*5;

//operators can be right or left associative and some don't have any associativity
$x = $y = 5; //here the precedence is the same and therefore the associativity
//determines how they are grouped in the case of the assignment operator it is
//right associative so $y = 5 is grouped together first
//then $x = $y is grouped together
//we read it from right to left

echo 5 / 2 * 10;
//the arithmetic operators are left associative so we read this from left to right
//the result will be 25

//you cannot use two operators that are non associative and the same precedence next to one another
echo 2 < 3 == 10; //but you can mix the ones that don't have the same precedence

//its encouraged to use paranthesis rather =

