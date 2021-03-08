<?php
$bil = array(20,12,35,47,26);
$total=0;
$jum=0;
foreach ($bil as $genap) {
    if(($genap % 2) == 0){
        echo $genap." ";
        $total += $genap;
        $jum++;
    }
}
echo "<br>";
echo 'total = '.$total.'<br>';
echo 'rata - rata = '.$total/$jum;
