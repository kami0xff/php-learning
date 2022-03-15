<?php
//strings can be enclose in single quote which is the literal string and in double quote which is the interpolated string
//inside the double quote string you can add variable names and they will be replaced by the value of the variable;

$literal = 'literal string cannot add variables in here';
$interpolated = "interpolated string adding the literal string here as var : {$literal}";

$name = "joshua caumont";
//you can use zero indexing to access element arrays just like with arrays
echo $name[0], "<br>";
echo $name[-1], "<br>"; //you can use negative index to access the elements starting from the back of the array or string
//this case

//strings are mutable we can modify each letter if we like
$name[1] = 0; //we could even put a number in there
$name[3] = 0.34; //we could even put a number in there floats get truncated however
$name[2] = 'A';

//if we try to access outside of the string
$name[32] = "B"; // then the string will be padded with one empty space ?
echo $name, "<br>";


//This is deprecated after php 7.4 you used to be able to use the curly braces {} as well as the [] to access
//arrat or string elements like we are doing above
//echo $name{0}, "<br>";


//HEREDOC
//they are ways to handle long and complex multiline strings which may contain both single and double quotes
//without the need to escape them
//The difference between heredoc and nowdoc is that heredoc treats the string as it is was in between double quotes""
//Whereas nowdoc treats the string as if it was in single quotes
//What does this mean well again just like the difference between "" and '' in Heredoc you can interpolate variables
//whist in Nowdocs you cannot;

$Heredoc = <<<TEXT
line 1 and some things :: '' ;; :: ;""
line 2 and osmething tihings $name and a var
line 3    
TEXT;

echo $Heredoc . "<br>";
//you will notice that the newlines in the Heredoc are not displayed in the browser as newlines but as spaces this is
//because the browser does not understand them
//in order to get the newlines there is a handy functino
echo nl2br($Heredoc);


//NOWDOC
//the syntax for nowdoc is actually the same just that the identifier needs to be enclosed in single quotes
$Nowdoc = <<<'TEXT'
this is a nowdoc i can't add any variables to this
so yeah this is just like a big multi line string
TEXT;

echo nl2br($Nowdoc);

//BE CAREFULL with spaces in heredocs and nowdocs this is because any space is actually added to the string
//if the lines are not against the side of the editor then you are adding spaces that might not be visible in the browser
//but could cause problems later on





