<?php
//membuat fungsi
function perkenalan1(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Abdulloh<br/>";
    echo "Senang berkenalan dengan anda<br/>";
};
//memanggil fungsi yang sudah dubuat
// echo "<hr>";
// perkenalan1();

//membuat fungsi dengan parameter
function perkenalan2($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
    };
// perkenalan2("Aisyah", "Hi");
// echo "<hr>";
// $saya = "Abdulloh";
// $ucapanSalam = "Ahlan wa sahlan";
// perkenalan2($saya, $ucapanSalam);

//membuat fungsi dengan nilai default
function perkenalan3($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
    }

    // perkenalan3("Alya Haura", "Hi");
    // echo "<hr>";
    // $saya = "Faishol";
    // $ucapanSalam = "Selamat pagi";
    // perkenalan3($saya);

//membuat fungsi yang mengembalikan nilai
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
    }
    // echo "Umur saya adalah ". hitungUmur(1994, 2015) ." tahun";

//memanggil fungsi didalam fungsi
function hitungUmur1($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
    }
    function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    // memanggil fungsi lain
    echo "Saya berusia ". hitungUmur1(1994, 2015) ." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
    }
    
    // memanggil fungsi perkenalan
    perkenalan("Ardianta");
?>