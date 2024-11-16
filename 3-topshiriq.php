<?php
$m = 5;
$n = 5;
$matrix = [[]];
$sums = [];
for ($i = 0; $i < $m; $i++) {

    for ($j = 0; $j < $n; $j++) {
        $matrix[$i][$j] = rand(1, 100);   
        $sums[$j] = $sums[$j]+ $matrix[$i][$j];
    }
    
}

for ($i = 0; $i < $m; $i++) {
    echo  implode(", ", $matrix[$i])."------- ".($i+1)." - ustunning  yig'indisi  ".($sums[$i])."<br>";
  
}




?>