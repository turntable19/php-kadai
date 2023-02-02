<?php
$name = "Minato";
switch ($name){
case "Minato":
echo "私は海南斗です。";
default:
echo "私の名前ではありません。";
}

$total = 0;
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

$fruits = array("apple", "orange", "lemon", "banana", "kiwi");
foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

$end = 100;

for ($i = 1; $i < 100; $i++) {
    // 5で割り切れたら{}内を実行
    if ($i % 5 == 0) {
        echo $i;
        echo "\n";
    }
}
?>