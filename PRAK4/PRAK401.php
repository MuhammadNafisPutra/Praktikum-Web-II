<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK 401</title>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $panjang = "";
    $lebar = "";
    $nilai_input = "";
    $nilai = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = isset($_POST['panjang']) ? $_POST['panjang'] : "";
        $lebar = isset($_POST['lebar']) ? $_POST['lebar'] : "";
        $nilai_input = isset($_POST['nilai']) ? $_POST['nilai'] : "";
        
        $nilai = explode(' ', trim($nilai_input));
    }
    ?>

    <form method="post">
        Panjang : <input type="text" name="panjang" value="<?= htmlspecialchars($panjang) ?>"><br>
        Lebar : <input type="text" name="lebar" value="<?= htmlspecialchars($lebar) ?>"><br>
        Nilai : <input type="text" name="nilai" value="<?= htmlspecialchars($nilai_input) ?>"><br>
        <button type="submit">Cetak</button>
    </form>
    <br>

    <?php
    if (!empty($panjang) && !empty($lebar) && !empty($nilai_input)) {
        $panjang = intval($panjang);
        $lebar = intval($lebar);

        if (count($nilai) == ($panjang * $lebar)) {
            $index = 0;
            echo "<table>";
            for ($i = 0; $i < $lebar; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $panjang; $j++) {
                    echo "<td>" . htmlspecialchars($nilai[$index]) . "</td>";
                    $index++;
                }
                echo "</tr>";
            }
            echo "<table>";
        } else {
            echo "<b>Panjang nilai tidak sesuai dengan ukuran matriks</b>";
        }
    }
    ?>
</body>
</html>