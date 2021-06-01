<?php
$file = 'old.txt';
$current = file_get_contents($file);   
file_put_contents('new.txt', $current);

$new = file_get_contents('new.txt');
echo $new; 


?> 
