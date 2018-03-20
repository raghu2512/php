<?php
$target_days = mktime(0,0,0,8,7,2017);
$today = time();
$diff_days = ($target_days - $today);
$days = (int)($diff_days/86400);
print "Days till next birthday: $days days!"."\n";
?>

