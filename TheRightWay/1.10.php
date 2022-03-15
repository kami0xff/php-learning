<?php

$programmingLanguages = ['PHP', 'Java', 'Python'];
$PL = array("C", "C++", "C#"); //older way to define array

echo $programmingLanguages[0];
//UNLIKE WITH STRINGS you cannot access elements at the back of the array with negative number indices;
echo $programmingLanguages[-1]; // this will give us an undefined array key and this is because a value does not exist at this index
//this is because our elements are give 0 1 2 by default here

echo $programmingLanguages[3]; //if we try to access an unassigned key or index in our array the value returned is null
$x = $programmingLanguages[3];
echo (int)$x;

//to avoid accessing undefined keys we can use the isset() function it checks if the item exists at that index
var_dump(isset($programmingLanguages[3]));

//we can mutate the arrays just like we mutated strings
echo "<br>";
$programmingLanguages[0] = "C++";
var_dump($programmingLanguages);
echo "<br>";


//to get the length of the array or the number of elements in the array we can use the count(arrayname) function

echo count($programmingLanguages);
echo "<br>";

//there are multiple notations to add elements to an array
$programmingLanguages[] = "haskell"; //adding elements to the array
array_push($programmingLanguages, "GO", "RUST"); //we can add elements to the array

echo count($programmingLanguages);
echo "<br>";

//in php you can define your array keys as strings or numbers when you have name keys your array becomes what is called
//an associative array


//oh this actuall did not redefine the array this added them to the array very strange
//so if we unset first then we get the expected behavior of restarting from 0
unset($programmingLanguages);
$programmingLanguages = [
    'php' => "8.1",
    'python' => '3'
];
$programmingLanguages["year"] = 2021;
$programmingLanguages[] = "test"; //but if we add elements to the array in this way then the array automatically adds them with the normal numeric index
array_push($programmingLanguages, "rust", "go"); // starting from 0

echo "<br>";
var_dump($programmingLanguages);
echo "<br>";

//now we can access elements from our array with those string keys
//
echo "<br>";
echo $programmingLanguages['php'];

//arrays in php are super flexible and they can contain anything at a time
//
unset($programmingLanguages);

//example of a more complex and more realistic array you might work with in php
$programmingLanguages = [
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website' => 'php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => 'somedate'],
            ['version' => 7.4, 'releaseDate' => 'somedate'],
        ]
    ],
    'python' => [
        'creator' => 'Guido van rossum',
        'extension' => '.py',
        'website' => 'python.org',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'somedate'],
            ['version' => 3.8, 'releaseDate' => 'somedate'],
        ]
    ],
];

echo "<pre>";
print_r($programmingLanguages);
echo "<pre>";


echo "<br>";
echo $programmingLanguages['php']['website'];
echo "<br>";
echo $programmingLanguages['php']['versions'][0]['releaseDate'];

//SOME very interesting behavior shown in the video php will overide the value in the array if you give an existing key
//and float values will have their decimal part truncated if we try to use the as keys
//strings with that can be converted to numbers will also override number keys which is a bit strange
$arr = [true => 'a', 1 => 'b', 1.67 => 'c', '1' => 'd'];
//so if we vardump this array it only contains 'd'
var_dump($arr);
//if i array push two elements will one override d ?
//no the incrementing started at 1 again however this is not great because now we have an array that has a starting index of 1
//which is not the convention
array_push($arr, 'e', 'f');
echo "<br>";
var_dump($arr);
echo "<br>";

//using null as a key will become the empty string
$arr[] = [null => 'g', "element"];
var_dump($arr);
echo "<br>";


//php array numeric keys increment with respect to the highest numeric key present in the array
//

//you can remove elements from an array with array_pop() this will remove the last element of the array
//are you can use array shift which will remove the first element of the array

array_pop($arr);
var_dump($arr);
echo "<br>";

array_shift($arr);
var_dump($arr);
echo "<br>";

//one very interesting thing here is that the array got reindexed after we removed the first element of the array and used
//array_shift but not after we use the array_pop for example so this is a behavior of array_shift to keep in mind of course only numeric
//keys get reindexed

//another way to remove elements from an array is to use unset() we have used it previously to destroy variables
//but you can also use it to destroy array elements if you don't specify an index you will destroy the whole array
unset($arr[0]);
unset($arr);

//unlike array shift unset can remove the first element and does not cause the reindexing for the array which is something you might
//want
$arr = [1 => 1, 20 => 2, 30 => 3, 4 => 4];
unset($arr[30]);
var_dump($arr); // here we removed the element at index 30 and the others remained where they are
echo "<br>";

array_shift($arr); //and ass soon as we call this it gets reindexed
var_dump($arr);
echo "<br>";

unset($arr);


//also something that is quite strange is that if you unset all the elements and then push a value into your array you might expect it to
//get an index of 0 however the index is kept and you get n+1 whatever your array size was before you unset all the elements

$arr = [1, 2, 3];
unset($arr[0], $arr[1], $arr[2]);
$arr[] = 4;
var_dump($arr);
echo "<br>";
$arr[] = 5;

array_shift($arr);// with this however again we reindexed the array
var_dump($arr);
echo "<br>";


//Array casting
$x = 5;
var_dump((array)$x); //this will cast x to an array and x will be the first element in the array
$x = null;
var_dump((array)$x);

//checking if keys exist
$array = ['a' => 1, 'b' => null];
var_dump(array_key_exists("b", $array)); //array_key_exists will tell you if the key exists or not no matter the value null or not
echo "<br>";
var_dump(isset($array['b'])); //isset will tell of the key exists and is not null

//review all this and make notes in obsidian once done with the playlist







