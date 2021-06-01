<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 6</title>
</head>
<body>
<?php 
if (!isset($_COOKIE['count'])) {
  echo "Welcome You have viewed this page 1 time.";
  $cookie = 1;
  setcookie("count", $cookie);
}else{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie);  
  echo "You have viewed this page ".$_COOKIE['count']." times.";
  }
?> 
  </body> 
</html>
