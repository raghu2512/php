<?php

function factorial($num){
  $fact=1;
  for ($x = 1; $x <= $num; $x++){
     $fact=$fact*$x;
  }
   echo $fact;
}

factorial(5);
?>
