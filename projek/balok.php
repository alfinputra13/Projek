

<?php 
    @$panjang = $_GET['panjang'];
    @$lebar = $_GET['lebar'];
    @$tinggi = $_GET['tinggi'];
    @$volume = $panjang * $lebar * $tinggi;
    @$luas = 2 * ($panjang + $lebar + $tinggi);
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>BALOK</title>
    </head>
    <body>
        <h2>MENGHITUNG BANGUN BALOK</h2>
        <form method="GET">
            <table>
                <tr>
                    <td>panjang</td>
                    <td>=</td>
                    <td><input type="text" name="panjang" value="<?php echo $panjang; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>lebar</td>
                    <td>=</td>
                    <td><input type="text" name="lebar" value="<?php echo $lebar; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>tinggi</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Volume Balok = ".$volume." cm^3<br/>";
                echo "Luas Balok = ".$luas." cm^2<br/>";
            ?>
        </form>
    </body>
</hmtl>