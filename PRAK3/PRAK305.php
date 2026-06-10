<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK305</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="string_input" required>
        <button type="submit" name="submit">submit</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit']) && !empty($_POST['string_input'])) {
        $input = $_POST['string_input'];
        $panjang = strlen($input);
        $hasil = "";

        echo "<h2>Input:</h2>";
        echo "<p>$input</p>";
        echo "<h2>Output:</h2>";

        for ($i = 0; $i < $panjang; $i++) {
            $huruf = $input[$i];
            
            for ($j = 0; $j < $panjang; $j++) {
                if ($j == 0) {
                    $hasil .= strtoupper($huruf);
                } else {
                    $hasil .= strtolower($huruf);
                }
            }
        }
        
        echo "<p>$hasil</p>";
    }
    ?>
</body>
</html>