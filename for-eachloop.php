<?php

// foreach loop over an array  
$arr = array (10, 20, 30, 40, 50, 60);

foreach ($arr as $val) { 
    echo $val . " ";
}

echo "\n";
    
// foreach loop 
$ages = array(
      "John" => 25, 
      "Alice" => 30, 
      "Bob" => 22
);

foreach ($ages as $name => $age) { 
    echo $name . " => " . $age . "\n";
}

?>
