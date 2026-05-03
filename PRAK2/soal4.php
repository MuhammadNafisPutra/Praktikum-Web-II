<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4</title>
</head>
<body>
    <form method="POST" action="">
        Nilai: <input type="number" name="nilai" value="<?= $_POST['nilai'] ?? '' ?>"><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        
        echo "<h2>Hasil: ";
        if ($nilai == 0) {
            echo "Nol";
        } elseif ($nilai > 0 && $nilai < 10) {
            echo "Satuan";
        } elseif ($nilai >= 11 && $nilai < 20) {
            echo "Belasan";
        } elseif ($nilai == 10 || ($nilai >= 20 && $nilai < 100)) {
            echo "Puluhan";
        } elseif ($nilai >= 100 && $nilai < 1000) {
            echo "Ratusan";
        } else {
            echo "Anda Menginput Melebihi Limit Bilangan";
        }
        echo "</h2>";
    }
    ?>