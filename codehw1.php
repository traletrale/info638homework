<!DOCTYPE html>
<html>
<head>
    <title>Homework 1</title>
</head>
<body>
<ul> 
<li>  
<?php
/*
Write a program that takes a number representing the change due to a user (in cents) and writes out how many dollars, 
quarters, dimes, nickels, and pennies she is due in change
*/
echo "You are due 241 cents back in change. <br>";
echo "<br>";
$change = 241;
echo "your change is ";
echo intdiv($change, 100) . " dollar/s,";
echo intdiv($change - 200, 25) . " quarter/s,";
echo intdiv($change - 225, 10) . " dime/s,";
echo intdiv($change - 235, 5) . " nickel/s,";
echo intdiv($change - 240, 1) . " penny/ies <br>";

/*
a. Write a PHP program that prints the full lyrics of the song on the page.   
b. Modify your code, such that you can print out the song for any number of starting beers
*/
echo "<br>";
for ($i=99; $i>=0; $i--)
{
    echo ($i." bottles of beer on the wall, ".$i." bottles of beer.<br>
Take one down and pass it around, ".($i-1)." bottles of beer on the wall.<br><br>" );
}

?>
</ul> 
</li>
</body>
</html>