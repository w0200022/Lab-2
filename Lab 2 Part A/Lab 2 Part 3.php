<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lab2 PartA</title>
</head>
<body>
<!--Step1: Write a PHP function
1.	Write a PHP function that accepts both a text string and a number.
2.	If the number is 1, output the text within an H1 tag.
3.	If the number is 2, output the text within an H2 tag.
4.	… ( and so on, until 6)
5.	If the number is 6, output the text within an H6 tag.
6.	If the number is something other than 1-6, output an error message.
7.	Call the function 7 times in a loop to write the 6 different headings and 1 error message.-->

<?php
function diffNumbersInDiffTags($number, $str){
    if ($number==1){
        echo "if the number is $number ". "<h$number>$str</h$number>";
    }
    if ($number==2){
        echo "if the number is $number ". "<h$number>$str</h$number>";
    }
    if ($number==3){
        echo "if the number is $number ". "<h$number>$str</h$number>";
    }
    if ($number==4){
        echo "if the number is $number ". "<h$number>$str</h$number>";
    }
    if ($number==5){
        echo "if the number is $number ". "<h$number>$str</h$number>";
    }
    if ($number==6){
        echo "if the number is $number ". "<h$number>$str</h$number>";
    }
    if ($number==7){
        echo nl2br("Sorry You cannot print any more numbers with H1-H6 tags\n\n");
    }
}
for ($i=1;$i<=7;$i++){
    diffNumbersInDiffTags($i,"Testing");
}
?>
<!--Step2: Pass variables to PHP functions by both Reference and Value-->
<?php
$str = 'Hello, World';
echo " $str!";
//pass variable by value
function sayHelloForPassByValue ($byValue) {
    $byValue = ' Blah...value';
    echo " ...$byValue";
}
//pass variable by reference
function sayHelloForPassByReferences (&$byRef) {
    $byRef = ' Blah...Reference';
    echo nl2br(" \n$byRef");
}
sayHelloForPassByValue ($str);
sayHelloForPassByReferences ($str);
?>

<!--Step 3: Use a global variable in a function
1.	Store a person’s age in a global variable.
2.	Write a PHP function that that will print out the age in that global variable with some sort
of message such as “You are 25 years old” in an h1 header.-->
<?php
$age = 25;
function usingGlobal()
{
    global $age;
    echo "<h1> Your are $age years old</h1>";
}
usingGlobal();
?>

</body>
</html>