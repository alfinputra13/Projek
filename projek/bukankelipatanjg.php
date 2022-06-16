<?php 
    @$jari_jari = $_REQUEST['jari-jari'];
    @$tinggi = $_REQUEST['tinggi'];
    @$luas_alas = 3.14 * $jari_jari * $jari_jari;
    @$volume = 1/3 * $luas_alas * $tinggi;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>KERUCUT</title>
    </head>
    <body>
        <H2>MENGHITUNG BANGUN KERUCUT</H2>
        <BR>
        <H3>Jari Jari Selain Kelipatan 7</H3>
        <form method="POST">
            <table>
                <tr>
                    <td>jari-jari</td>
                    <td>=</td>
                    <td><input type="text" name="jari-jari" value="<?php echo $jari_jari; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>tinggi</td>
                    <td>=</td>
                    <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Luas Alas = ".$luas_alas." cm^2<br/>";
                echo "Volume Kerucut = ".$volume." cm^3<br/>";
            ?>
        </form>
    </body>
</hmtl>