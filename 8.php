<?php
$str1 = 'The quick " " 	 brown fox';
echo preg_replace('/\s+/', '', $str1)."\n";
?>