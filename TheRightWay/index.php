<?php

//1.2

print "Hello"; //this one returns 1 so it can be used in expressions
$name = "joshua";
if (true && true && print "all statements are true") {
    echo "World $name";
};

//echo is faster and more convenient we can separate strings with comas
//so we should use echo only

//Variables in php by default are assigned by value
//if we assignement by referrence such that when x changes y changes
//we can do it in php
$x = 1;
$y = $x;
$z = &$x;
$x = 3;
echo "y : {$y}";
echo "z : {$z}";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1.2</title>
</head>
<body>
    <h1><?php echo $name ?></h1>
    <?php echo "<p>not a good idea to mix html and php ($x + $y + $z) = {($x+$y+$z)} $name</p>"?>
    //expression did not work inside {}
</body>
</html>

