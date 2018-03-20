<?php

function prime($num){
  $flag=0;
  for ($x = 2; $x <= sqrt($num); $x++){
     if($num%$x==0){
       $flag=1;
       break;
     }
  }
   if($flag==1 || $num==1 || $num ==0)
     echo "It is not prime.</br>";
   else 
        echo "It is prime.</br>";
}

prime(1);
prime(4);
?>
