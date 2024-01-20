<?php
/*
String      Series of characters surrounded by quotes
Integer     Whole numbers
Float       Decimal numbers
Boolean     True or false
Array       Data structure which can hold multiple values
Object      Class variable
NULL        Empty variable
Resource    Special variable that holds a resource
*/

/*
Variables must be prefixed with $
Variables must start with a letter or an underscore
Variables can't start with a number
Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _)
Variables are case sensitive
*/

$str = "This is a string"; //string variable
$num = 15; //Integer value
$money = 17.46; //Float value
$heads = false; //Boolean value

echo "String output: ", $str;

// nl2br() can be used to to start a new line in strings
// it works by adding a <pre></pre> to the text so it can be seen as plain text when sent to the browser
// this allows for the \n to be seen as a new line operator rather than a whitespace
echo nl2br("\nString manipulation: ${num} + ${money} = 32.46\n"); //how to insert variable into string output

echo "Variable dump: ";
var_dump($str); //dump information on the variable, will give variable type and length when relevant

$x = 2;
$y = 3;

//Different operation types for numbers
$z = $x + $y;
//$z = $x - $y;
//$z = $x * $y;
//$z = $x / $y;
//$z = $x % $y;

echo nl2br("\nOperation: ${z}\n");

//Define can be used for constant variables that will not change
define('NAME', 'Brandon');

echo "Define usage: ", NAME;

//Arrays
$numbers = [1,2,3,4,5];
$fruits = array("banana", "apple", "cherry");

echo nl2br("\nNumber array: ");
var_dump($numbers);

echo nl2br("\nFruits array: ");
var_dump($fruits);

//When indexing, arrays are 0 based in PHP
echo nl2br("\nOutput number index 3: ");
echo $numbers[3];

echo nl2br("\nOutput fruits index 2: ");
echo $fruits[2];

//Associative arrays (key and value indexing)
$flavors = [
    "lemon" => "sour",
    "orange" => "tangy",
    "cherry" => "sweet",
];

echo nl2br("\nFlavor output: ");
echo $flavors["lemon"];

//Can also be multidimensional (similar to JSON)
$user_info = [
    [
        "first_name" => "John",
        "last_name" => "Smith",
        "email" => "john@smith.com",
    ],
    [
        "first_name" => "Jane",
        "last_name" => "Doe",
        "email" => "jane@doe.com",
    ],
    [
        "first_name" => "Fake",
        "last_name" => "Name",
        "email" => "fake@name.com",
    ]
];
echo nl2br("\nUser info index 2's email address: ");
echo $user_info[2]["email"];
echo nl2br("\n");

/*
List of conditional statements
< Less than
> Greater than
<= Less than or equal to
>= Greater than or equal to
== Equal to
=== Identical to
!= Not equal to
!== Not identical to
*/

$age = 18;
if($age >= 18) {
    echo "You are old enough to vote";
} else {
    echo "You are not old enough to vote";
}

echo nl2br("\nFor loop output of i: ");

//For loops
for($i = 0;$i < 10; $i++) {
    echo $i, " ";
}

//While loops
echo nl2br("\nWhile loop for count 10: ");
$count = 0;

while($count < 10) {
    echo $count, " ";
    $count++;
}

echo nl2br("\nFruit array output: ");
//For each loop
foreach($fruits as $fruit) {
    echo $fruit, " ";
}

echo nl2br("\nFunction output that calculates sum of entire array: ");
//Basic functions
function calcSum(array $nums) {
    $sum = 0;
    foreach($nums as $value) {
        $sum = $sum + $value;
    }
    echo $sum;
}

calcSum($numbers);
?>