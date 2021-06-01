<?php
$n= $_POST['n'];
$r= $_POST['r'];
function nCr( $n, $r)   
{   
  return fact($n) / (fact($r) *  fact($n - $r));   
}   
function fact( $n)   
{   
 $res = 1;   
  for ( $i = 2; $i <= $n; $i++)   
  $res = $res * $i;   
  return $res;   
}     
  echo "Value of nCr = ";  
  echo nCr($n, $r);   
?>  