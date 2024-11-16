<?php
// O'lchamlarni belgilash
$M = 4; // Qatorlar soni
$N = 5; // Ustunlar soni

// Matritsani hosil qilish
$matrix = [];
for ($i = 0; $i < $M; $i++) {
    for ($j = 0; $j < $N; $j++) {
        $matrix[$i][$j] = rand(1, 100); // 1 dan 100 gacha tasodifiy son
    }
}

// Matritsani ko'rsatish
echo "Berilgan matritsa:\n";
foreach ($matrix as $row) {
    echo implode("\t", $row) . "\n";
}

// Ustunlar bo'yicha hisoblash
$counts = [];
for ($j = 0; $j < $N; $j++) {
    $sum = 0;

    // Har bir ustundagi elementlar yig'indisini hisoblash
    for ($i = 0; $i < $M; $i++) {
        $sum += $matrix[$i][$j];
    }

    // Ustun o'rta arifmetik qiymatini topish
    $average = $sum / $M;

    // O'rtacha qiymatdan katta elementlar sonini hisoblash
    $count = 0;
    for ($i = 0; $i < $M; $i++) {
        if ($matrix[$i][$j] > $average) {
            $count++;
        }
    }

    // Natijani saqlash
    $counts[$j] = $count;
}

// Har bir ustundagi natijalarni ko'rsatish
echo "\nHar bir ustundagi o'rtacha qiymatdan katta elementlar soni:\n";
foreach ($counts as $columnIndex => $count) {
    echo "Ustun " . ($columnIndex + 1) . ": $count ta\n";
}
?>
