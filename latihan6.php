<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Soal</title>
</head>
<body>
    <form action="" method="post">
        <h5>Kasir</h5>
        <label>Harga Barang</label>
        <input type="number" name="harga_beli">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
<?php
//latihan soal function
if(isset($_POST['submit'])){
    $harga_beli = $_POST['harga_beli'];
    $pot = diskon($harga_beli)*$harga_beli;
    $bayar = $harga_beli-$pot;
    echo "diskon : ".diskon($harga_beli)."<br>";
    echo "potongan : ".$pot."<br>";
    echo "bayar : ".$bayar."<br>";
}

function diskon($belanja=0){
    if($belanja >= 4000000){
        $disk = 0.1;
    }else{
        $disk = 0;
    }
    return $disk;
}
?>