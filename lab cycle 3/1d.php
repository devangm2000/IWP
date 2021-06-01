
<?php
 $number=$_POST["number"];
 $temp = $number;
 $sum = 0;
 while( $number > 0 )
 {
 $rem = $number % 10;
 $sum = $sum*10 + $rem ;
 $number = floor($number / 10);
 }
 if( $temp == $sum )
 {
echo "Palindrome Number";
 }else
 {
echo "Not Palindrome Number";
 }
?>
