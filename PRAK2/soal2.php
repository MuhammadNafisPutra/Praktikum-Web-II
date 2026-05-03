<!DOCTYPE html>
<html>
<head>
    <title>PRAK202</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <?php
    $errorNama = $errorNim = $errorJenisKelamin = "";
    $nama = $nim = $jenis_kelamin = "";
    $tampilHasil = "";

    if (isset($_POST['submit'])) {
        if (empty($_POST['nama'])) {
            $errorNama = "nama tidak boleh kosong";
        } else {
            $nama = $_POST['nama'];
        }

        if (empty($_POST['nim'])) {
            $errorNim = "nim tidak boleh kosong";
        } else {
            $nim = $_POST['nim'];
        }

        if (empty($_POST['jk'])) {
            $errorJenisKelamin = "jenis kelamin tidak boleh kosong";
        } else {
            $jenis_kelamin = $_POST['jk'];
        }

        if (!empty($nama) && !empty($nim) && !empty($jenis_kelamin)) {
            $tampilHasil = "<h4>Output:</h4> $nama <br> $nim <br> $jenis_kelamin <br>";
        }
    }
    ?>

    <form method="POST" action="">
        Nama: <input type="text" name="nama" value="<?= $nama ?>">
        <span class="error">* <?= $errorNama ?></span><br>

        Nim: <input type="text" name="nim" value="<?= $nim ?>">
        <span class="error">* <?= $errorNim ?></span><br>

        Jenis Kelamin: <span class="error">* <?= $errorJenisKelamin ?></span><br>
        <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki<br>
        <input type="radio" name="jk" value="Perempuan"> Perempuan<br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?= $tampilHasil ?>

</body>
</html>