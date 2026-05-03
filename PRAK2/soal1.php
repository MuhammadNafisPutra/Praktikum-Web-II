<!DOCTYPE html>
<html>
<head><title>PRAK201</title></head>
<body>
    <?php
    $nama1_input = $_POST['nama1'] ?? '';
    $nama2_input = $_POST['nama2'] ?? '';
    $nama3_input = $_POST['nama3'] ?? '';

    echo '<form method="POST" action="">';
    echo 'Nama: 1 <input type="text" name="nama1" value="' . $nama1_input . '" required><br>';
    echo 'Nama: 2 <input type="text" name="nama2" value="' . $nama2_input . '" required><br>';
    echo 'Nama: 3 <input type="text" name="nama3" value="' . $nama3_input . '" required><br>';
    echo '<input type="submit" name="submit" value="Urutkan">';
    echo '</form>';

    if (isset($_POST['submit'])) {
        $a = $_POST['nama1'];
        $b = $_POST['nama2'];
        $c = $_POST['nama3'];

        if ($a <= $b && $a <= $c) {
            $pertama = $a;
            if ($b <= $c) {
                $kedua = $b; $ketiga = $c;
            } else {
                $kedua = $c; $ketiga = $b;
            }
        } elseif ($b <= $a && $b <= $c) {
            $pertama = $b;
            if ($a <= $c) {
                $kedua = $a; $ketiga = $c;
            } else {
                $kedua = $c; $ketiga = $a;
            }
        } else {
            $pertama = $c;
            if ($a <= $b) {
                $kedua = $a; $ketiga = $b;
            } else {
                $kedua = $b; $ketiga = $a;
            }
        }

        echo "<h4>Output</h4>";
        echo "$pertama <br> $kedua <br> $ketiga";
    }
    ?>
</body>
</html>