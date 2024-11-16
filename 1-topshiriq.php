<?php
$m = 5;
$n = 5;
$matrix = [[]];
for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $matrix[$i][$j] = rand(1, 100);
    }
}

for ($i = 0; $i < $m; $i++) {
   echo  implode(", ", $matrix[$i])."<br>";
}




?>