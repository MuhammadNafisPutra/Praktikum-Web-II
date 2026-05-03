<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>
<body>
    <?php
    $nilai_input = $_POST['nilai'] ?? '';
    $dari_input = $_POST['dari'] ?? '';
    $ke_input = $_POST['ke'] ?? '';
    ?>

    <form method="POST" action="">
        Nilai: <input type="number" name="nilai" value="<?= $nilai_input ?>" required><br>
        
        Dari: <br>
        <input type="radio" name="dari" value="C" <?= $dari_input == 'C' ? 'checked' : '' ?>> Celcius<br>
        <input type="radio" name="dari" value="F" <?= $dari_input == 'F' ? 'checked' : '' ?>> Fahrenheit<br>
        <input type="radio" name="dari" value="Re" <?= $dari_input == 'Re' ? 'checked' : '' ?>> Rheamur<br>
        <input type="radio" name="dari" value="K" <?= $dari_input == 'K' ? 'checked' : '' ?>> Kelvin<br>
        
        Ke: <br>
        <input type="radio" name="ke" value="C" <?= $ke_input == 'C' ? 'checked' : '' ?>> Celcius<br>
        <input type="radio" name="ke" value="F" <?= $ke_input == 'F' ? 'checked' : '' ?>> Fahrenheit<br>
        <input type="radio" name="ke" value="Re" <?= $ke_input == 'Re' ? 'checked' : '' ?>> Rheamur<br>
        <input type="radio" name="ke" value="K" <?= $ke_input == 'K' ? 'checked' : '' ?>> Kelvin<br>
        
        <input type="submit" name="konversi" value="Konversi">
    </form>

<?php
if (isset($_POST['konversi'])){
    $nilai = $_POST['nilai'];
    $dari = $_POST['dari'] ?? '';
    $ke = $_POST['ke'] ?? '';

    if ($dari != '' && $ke != '') {
            if ($dari == "C") {
                $celcius = $nilai;
            } elseif ($dari == "F") {
                $celcius = ($nilai - 32) * 5/9;
            } elseif ($dari == "Re") {
                $celcius = $nilai * 5/4;
            } elseif ($dari == "K") {
                $celcius = $nilai - 273.15;
            }

            if ($ke == "C") {
                $hasil = $celcius;
                $satuan = "°C";
            } elseif ($ke == "F") {
                $hasil = ($celcius * 9/5) + 32;
                $satuan = "°F";
            } elseif ($ke == "Re") {
                $hasil = $celcius * 4/5;
                $satuan = "°Re";
            } elseif ($ke == "K") {
                $hasil = $celcius + 273.15;
                $satuan = "°K";
            }
            
            echo "<h2>Hasil Konversi: " . number_format($hasil, 1) . " $satuan</h2>";
        }
    }
?>
    
</body>
</html>