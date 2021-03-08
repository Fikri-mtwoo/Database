<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <form action="" method="post">
        <div class="foods">
            <h4>Foods</h4>
            <select name="foods[]" multiple size="3">
                <option value="10000">Nasi Goreng  Rp. 10.000,-</option>
                <option value="20000">Sate Kambing Rp. 20.000,-</option>
                <option value="25000">Tongseng     Rp. 25.000,-</option>
            </select>
        </div>
        <div class="drinks">
            <h4>Drinks</h4>
                <input type="checkbox" name="driks[]" value="7000">Juice         Rp. 7.000,- <br>
                <input type="checkbox" name="driks[]" value="5000">Coffe         Rp. 5.000,- <br>
                <input type="checkbox" name="driks[]" value="3000">Tea           Rp. 3.000,- <br>
                <input type="checkbox" name="driks[]" value="6000">Coconut Ice   Rp. 6.000,- <br>
        </div>
        
        <button type="submit" name="submit">Submit</button>
    </form>
    
</body>
</html>
<?php
if(isset($_POST["submit"]))  
{
    
    $foods = $_POST['foods'];
    $driks = $_POST['driks'];
    $sum_food = 0;
    $sum_drink = 0;
    

    echo "<table border='1'>
        <tr>
            <td>Your Foods</td>
            <td>Your Drinks</td>
        </tr>
        <tr>
            <td>";
            foreach ($foods as $food) {
                echo $food."<br>";
                $sum_food += $food;
            }
            echo "</td>
            <td>";
            foreach ($driks as $drink) {
                echo $drink."<br>";
                $sum_drink += $drink;
            }
            echo "</td>    
        </tr>
        <tr>
            <td>".$sum_food."</td>
            <td>".$sum_drink."</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>".($sum_food+$sum_drink)."</td>
        </tr>

    </table>";
}
?>