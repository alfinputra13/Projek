<?php 
    @$jari_jari = $_REQUEST['jari-jari'];
    @$volume = 4/3 * 3.14 * $jari_jari * $jari_jari * $jari_jari;
    @$luas = 4 * 3.14  * $jari_jari * $jari_jari; 
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>BOLA</title>
    </head>
    <body>
        <H2>MENGHITUNG BANGUN BOLA</H2>
        <BR>
        <H3>Jari Jari Selain Kelipatan 7</H3>
        <form method="GET">
            <table>
                <tr>
                    <td>jari-jari</td>
                    <td>=</td>
                    <td><input type="text" name="jari-jari" value="<?php echo $jari_jari; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Volume Bola = ".$volume." cm^3<br/>";
                echo "Luas Bola = ".$luas." cm^2<br/>";
            ?>
        </form>
    </body>
</hmtl>
