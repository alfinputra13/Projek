<?php 
    @$jari_jari = $_REQUEST['jari-jari'];
    @$volume = 4/3 * 22/7 * $jari_jari * $jari_jari * $jari_jari;
    @$luas = 4 * 22/7  * $jari_jari * $jari_jari; 
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>BOLA</title>
    </head>
    <body>
        <H2>MENGHITUNG BANGUN BOLA</H2>
        <BR>
        <H3>Jari Jari Kelipatan 7</H3>
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
        <BR>
        <BR>
        <li>
  <a href="bukankelipatan.php" style="color:blue">
      SELAIN KELIPATAN 7 KLIK DISINI
     </a><br>
     <BR>
        <BR>

        
     <?php 
    @$bialngan= $_GET['angka'];
    @$kelipatan= 1/7 * $bialngan;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>KUBUS</title>
    </head>
    <body>
        <BR>
   <a style="color:red"> 
Jika Ingin Mengetahui kelipatan 7 atau bukan pastikan tidak ada titik di hasilnya!</a>
        <form method="GET">
            <table>
                <tr>
                    <td>angka</td>
                    <td>=</td>
                    <td><input type="text" name="angka" value="<?php echo $bialngan; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="HASIL"/><br/><br/>
            <?php
                echo "Hasilnya = ".$kelipatan." ";
            ?>
        </form>
    </body>
</hmtl>


    </body>
</hmtl>

