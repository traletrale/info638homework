<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="codehw3.css">
<style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
<ul>



<?php

/* Put the following book data into a multi-dimensional array, then use your array to print out the books on the web page 
in an attractive table (e.g. you may want to color alternating rows differently, etc.)  Somewhere on your page, you 
should also include the total price, if the user were to purchase all the books listed, e.g. example output (style your table 
as you wish): 
Book Data (title, author, number of pages, type, price) 
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
*/

$bd = array (
 array("PHP and MySQL Web Development","Luke Welling",144,"Paperback","$31.63"),
 array("Web Design with HTML, CSS, JavaScript and jQuery","Jon Duckett",135,"Paperback","$41.23"),
 array("PHP Cookbook: Solutions & Examples for PHP Programmers","David Sklar",14,"Paperback","$40.88"),
 array("JavaScript and JQuery: Interactive Front-End Web Development","Jon Duckett",251,"Paperback","$22.09"),
 array("Modern PHP: New Features and Good Practices","Josh Lockhart",7,"Paperback","$28.49"),
 array("Programming PHP","Kevin Tatroe",26,"Paperback","$28.96"),
);

$bd[0][0].$bd[0][1].$bd[0][2].$bd[0][3].$bd[0][4].".<br>";
$bd[1][0].$bd[1][1].$bd[1][2].$bd[1][3].$bd[1][4].".<br>";
$bd[2][0].$bd[2][1].$bd[2][2].$bd[2][3].$bd[2][4].".<br>";
$bd[3][0].$bd[3][1].$bd[3][2].$bd[3][3].$bd[3][4].".<br>";
$bd[4][0].$bd[4][1].$bd[4][2].$bd[4][3].$bd[4][4].".<br>";
$bd[5][0].$bd[5][1].$bd[5][2].$bd[5][3].$bd[5][4].".<br>";

echo '<table>
       <tr><th>Title</th><th>Author</th><th>Page Number</th><th>Type</th><th>Price</th>
       <tr><td>'.$bd[0][0].'</td><td>'.$bd[0][1].'</td><td>'.$bd[0][2].'</td><td>'.$bd[0][3].'</td><td>'.$bd[0][4].'</tr>
       <tr><td>'.$bd[1][0].'</td><td>'.$bd[1][1].'</td><td>'.$bd[1][2].'</td><td>'.$bd[1][3].'</td><td>'.$bd[1][4].'</tr>
       <tr><td>'.$bd[2][0].'</td><td>'.$bd[2][1].'</td><td>'.$bd[2][2].'</td><td>'.$bd[2][3].'</td><td>'.$bd[2][4].'</tr>
       <tr><td>'.$bd[3][0].'</td><td>'.$bd[3][1].'</td><td>'.$bd[3][2].'</td><td>'.$bd[3][3].'</td><td>'.$bd[3][4].'</tr>
       <tr><td>'.$bd[4][0].'</td><td>'.$bd[4][1].'</td><td>'.$bd[4][2].'</td><td>'.$bd[4][3].'</td><td>'.$bd[4][4].'</tr>
       <tr><td>'.$bd[5][0].'</td><td>'.$bd[5][1].'</td><td>'.$bd[5][2].'</td><td>'.$bd[5][3].'</td><td>'.$bd[5][4].'</tr>
    </table>';

;echo "<br>";
echo "The total price is $192.58.";
;echo "<br>";

/*Repeat the coin exercise from HW2, but modify your program to 1) be a function that takes one argument – the number 
of heads in a row you'd like to flip and then 2) modify your code to use this argument to allow a variable number of 
heads in a row to be chosen. E.g.  coinToss(8); will flip the coin until 8 heads in a row are obtained.   
You should print out the number of heads in a row you are seeking and the total number of flips it took. */

$imgheads = "<img src='heads.jpg' style='width:50px;height:50px;'/>";
$imgtails = "<img src='tails.jpg' style='width:50px;height:50px;'/>";

;echo "<br>";
   $headCount = 0;
   $flipCount = 0;
   while ($headCount < 3) {
      $flip = rand(0,1);
      $flipCount ++;
      if ($flip){
         $headCount ++;
         echo $imgheads;
      }
      else {
         $headCount = 0;
         echo $imgtails;
      }
   }
   echo "<p>It took {$flipCount} flips to get 3 consecutive heads.</p>";

?>
</ul>
</body>
</html>