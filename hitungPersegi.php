<?php
include_once('bangunRuang.php');
    if(isset($_POST['submit'])){
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $tinggi = $_POST['tinggi'];
        
        $balok = new Balok;
        $balok->setPanjang($panjang);
        $balok->setLebar($lebar);
        $balok->setTinggi($tinggi);

        echo "Luas Persegi dengan panjang $panjang dan lebar $lebar adalah ".$balok->luas();
        echo "<br>";
        echo "Volume Balok dengan panjang $panjang, lebar $lebar, dan tinggi $tinggi adalah ".$balok->volume();
    }
?>