<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK304</title>
</head>
<body>
    <?php
    $jumlah_bintang = 0;

    if (isset($_POST['jumlah_bintang'])) {
        $jumlah_bintang = intval($_POST['jumlah_bintang']);
    }
    if (isset($_POST['tambah'])) {
        $jumlah_bintang++;
    }
    if (isset($_POST['kurang'])) {
        $jumlah_bintang--;
    }
    ?>

    <form method="POST">
        <label for="jumlah_bintang">Jumlah bintang : </label>
        <input type="number" name="jumlah_bintang" value="<?= $jumlah_bintang == 0 ? '' : $jumlah_bintang ?>" required><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if ($jumlah_bintang > 0) {
        echo "<p>Jumlah bintang $jumlah_bintang</p>";
        $bintang = "./star-images-9441.png";
        
        $i = 0;
        while ($i < $jumlah_bintang) {
            echo "<img src='$bintang' width='50' style='vertical-align:middle;'> ";
            $i++;
        }
    ?>
        <br><br>
        <form method="POST">
            <input type="hidden" name="jumlah_bintang" value="<?= $jumlah_bintang ?>">
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
        </form>
    <?php
    }
    ?>
</body>
</html>