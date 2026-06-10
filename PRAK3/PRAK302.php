<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK302</title>
</head>
<body>
    <form method="POST">
        <label for="tinggi">Tinggi: </label>
        <input type="number" name="tinggi" value="<?= isset($_POST['tinggi']) ? $_POST['tinggi'] : '' ?>" required><br>
        <label for="gambar">Alamat Gambar: </label>
        <input type="text" name="gambar" size="50" value="<?= isset($_POST['gambar']) ? $_POST['gambar'] : '' ?>" required><br>
        <button type="submit">Cetak</button>
    </form>

    <div style="margin-top: 20px;">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tinggi = intval($_POST['tinggi']);
            $gambar = $_POST['gambar'];
            
            $i = $tinggi;
            while ($i >= 1) {
                $spasi = $tinggi - $i;
                $s = 0;
                
                while ($s < $spasi) {
                    echo "<span style='display:inline-block; width:30px;'></span>";
                    $s++;
                }
                
                $j = 0;
                while ($j < $i) {
                    echo "<img src='$gambar' width='30'>";
                    $j++;
                }
                
                echo "<br>";
                $i--;
            }
        }
        ?>
    </div>
</body>
</html>