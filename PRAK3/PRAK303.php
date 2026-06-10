<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK303</title>
</head>
<body>
    <form method="POST">
        <label for="bawah">Batas Bawah : </label>
        <input type="number" name="bawah" value="<?= isset($_POST['bawah']) ? $_POST['bawah'] : '' ?>" required><br>
        <label for="atas">Batas Atas : </label>
        <input type="number" name="atas" value="<?= isset($_POST['atas']) ? $_POST['atas'] : '' ?>" required><br>
        <button type="submit">Cetak</button>
    </form>
    <br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $bawah = intval($_POST['bawah']);
        $atas = intval($_POST['atas']);
        $bintang = "./star-images-9441.png";
        
        $i = $bawah;
        if ($bawah <= $atas) {
            do {
                if (($i + 7) % 5 == 0) {
                    echo "<img src='$bintang' width='20' style='vertical-align:middle;'> ";
                } else {
                    echo "$i ";
                }
                $i++;
            } while ($i <= $atas);
        }
    }
    ?>
</body>
</html>