<?php
$i = 1;
$sum = 0;
while($i <= 20){
    if($i % 3 === 0 || $i % 5 === 0){
        echo $i.'は3か5の倍数です。<br>';
        //前の文に上乗せして和を求める
        $sum += $i; 
    }
    $i++;
}
    echo '合計は'.$sum.'です。';