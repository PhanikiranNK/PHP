<?php 
$str1 = crc32("Hello world."); 
echo 'Without %u: '.$str1."\n"; 
echo 'With %u: '; 
printf("%u\n", $str1); 
?>
