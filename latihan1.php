<?php
//array satu dimensi
$kitab = array('Hadits', 'Shiroh', 'Tauhid');
echo "$kitab[0] $kitab[1] $kitab[2]";
for ($i=0; $i<3; $i++) { 
    echo $kitab[$i]." ";
}
foreach ($kitab as $kontent) {
    echo $kontent." ";
}
?>