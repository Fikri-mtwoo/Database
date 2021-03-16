<?php
include_once ("lingkaran.php");
include_once ("tabung.php");

    if(isset($_POST['submit'])){
        $jari_jari = $_POST['jari_jari'];
        $tinggi = $_POST['tinggi'];

        $lingkaran = new Lingkaran;
        $tabung = new Tabung;

        $lingkaran->set_jari($jari_jari);
        $tabung->set_jari($jari_jari);
        $tabung->set_tinggi($tinggi);


        echo "Luas lingkaran dengan jari-jari $jari_jari adalah ";
        echo $lingkaran->luas();
        echo "<br>";
        echo "Volume tabung dengan jari-jari $jari_jari dan tinggi $tinggi adalah ";
        echo $tabung->volume();
    }
?>