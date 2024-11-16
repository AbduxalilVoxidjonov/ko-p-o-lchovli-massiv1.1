<?php
$m = 5;
$n = 5;
$matrix = [[]];
$sums = [];
$sum=0;
for ($i = 0; $i < $m; $i++) {
    $sum=0;
    for ($j = 0; $j < $n; $j++) {
        $matrix[$i][$j] = rand(1, 100);
        $sum+=$matrix[$i][$j];
    }
    $sums[$i] = $sum;
}

$element = array_search(max($sums),$sums); // elementni indexini topish
$nums=[];


for ($i = 0; $i < $m; $i++) {
    echo  implode(", ", $matrix[$i])."     bu satrning yig'indisi  ".($sums[$i])."<br>";
 }
  

for ($i = 0; $i < $n; $i++) {
    $nums[$i] = $matrix[$element][$i];
}

echo "Eng katta yigíndiga ega bo'lgan satr eng kichkina soni: ".min($nums);


?>