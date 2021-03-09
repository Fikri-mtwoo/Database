<?php
function mygrade($nilai){
    if($nilai >=80 && $nilai <=100){
        $grade  = "A";
    }else if($nilai >=66 && $nilai <=79.99){
        $grade = "B";
    }else if($nilai >=56 && $nilai <=65.99){
        $grade = "C";
    }else if($nilai >=46 && $nilai <=55.99){
        $grade = "D";
    }else if($nilai >=0 && $nilai <=45.99){
        $grade = "E";
    }else{
        $grade = "O";
    }
    return $grade;
}
$nilai = array(78,60,50,40,81,90);
for ($i=0; $i<count($nilai); $i++) { 
    // echo $nilai[$i]."-".mygrade($nilai[$i]) ."<br>";
    $grades[] = mygrade($nilai[$i]);
}
for ($i=0; $i<count($grades); $i++) { 
    echo $nilai[$i]."-".$grades[$i] ."<br>";
}
?>