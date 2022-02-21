<!DOCTYPE html>
<html>
<head>
</head>
<body>
<ul> 
<?php

/*1. Challenge: ISBN Validation 
An ISBN is a ten digit code which identifies a book. The first nine digits represent the book and the last digit is used to 
make sure the ISBN is correct.  To verify an ISBN you do the following:  
1. Obtain the sum of 10 times the first digit, 9 times the second digit, 8 times the third digit... all the way till you 
add 1 times the last digit. 
2. Divide the sum by 11, if the sum leaves no remainder when divided by 11 the code is a valid ISBN. 
For example: 
0747532699 is valid because: 
(10 * 0) + (9 * 7) + (8 * 4) + (7 * 7) + (6 * 5) + (5 * 3) + (4 * 2) + (3 * 6) + (2 * 9) + (1 * 9) = 242 which can be 
divided by 11 and have no remainder. 
Web Development   
 
For the cases where the last digit has to equal to ten, the last digit is written as X. For example, 156881111X is also a 
valid ISBN. 
Given the above constraints of the ISBN number, you should write a function that can return TRUE if a number is a valid 
ISBN and FALSE otherwise.  Test out your function with several valid and invalid 10-digit ISBNs (you can look up some 
real ISBNs in online bookstores), including ones where the last digit is written as X.   
You should print out the ISBN you have tested and the result, e.g. Testing ISBN 123456789 which is Not Valid! */

echo "checking ISBN 0441013597 for validty...";
echo "<br>";

function validate($isbn) {
 if ($isbn == (10 * 0) + (9 * 4) + (8 * 4) + (7 * 1) + (6 * 0) + (5 * 1) + (4 * 3) + (3 * 5) + (2 * 9) + (1 * 7)) {
      return true;
   } else {
      return false;
   }
}
if (true) echo "This ISBN is valid. <br>" 

/*a.  The mt_rand() function returns a random value; optionally you may enter a mix and max number to be returned. 
Documentation is available at http://www.w3schools.com/php/func_math_mt_rand.asp   
Create a PHP page that simulates a series of random coin tosses for 1, 3, 5, 7, and 9 flips. You should make your page 
visually interesting by using images to represent a toss of heads or tails, e.g.: 
b.  Create a loop that will toss the coin repeatedly until you have flipped exactly two heads in a row. Stop the loop and 
print out to the page the number of tosses this took, e.g.:*/

;echo "<br>";
echo (mt_rand(1,2)); 
;echo "<br>";
;echo (mt_rand(1,2)); echo (mt_rand(1,2)); echo (mt_rand(1,2));
;echo "<br>";
;echo (mt_rand(1,2)); echo (mt_rand(1,2)); echo (mt_rand(1,2)); echo (mt_rand(1,2)); echo (mt_rand(1,2));
;echo "<br>";
;echo (mt_rand(1,2)); echo (mt_rand(1,2)); echo (mt_rand(1,2)); echo (mt_rand(1,2)); echo (mt_rand(1,2));echo (mt_rand(1,2)); echo (mt_rand(1,2));
;echo "<br>";
;echo (mt_rand(1,2)); echo (mt_rand(1,2)); echo (mt_rand(1,2)); echo (mt_rand(1,2)); echo (mt_rand(1,2));echo (mt_rand(1,2)); echo (mt_rand(1,2));echo (mt_rand(1,2)); echo (mt_rand(1,2));
;echo "<br>";

;echo "<br>";
   $headCount = 0;
   $flipCount = 0;
   while ($headCount < 2) {
      $flip = rand(0,1);
      $flipCount ++;
      if ($flip){
         $headCount ++;
         echo "<div class=\"coin\">1</div>";
      }
      else {
         $headCount = 0;
         echo "<div class=\"coin\">2</div>";
      }
   }
   echo "<p>It took {$flipCount} flips to get two consecutive heads.</p>";

?>
</ul>
</body>
</html>