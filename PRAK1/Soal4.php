<!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
     <title>PRAK104 - TH and TD</title>
        <style>
         table {
            border: 1px solid black;
            border-spacing: 2px; 
         }
         th, td {
            border: 1px solid black;
            padding: 4px 8px;
          }
        </style>
    </head>
    <body>

<?php
function Smartphones() {
    $merkSmartphone = [
        "Samsung Galaxy S22",
        "Samsung Galaxy S22+",
        "Samsung Galaxy A03",
        "Samsung Galaxy Xcover 5"
    ];

    echo "<table>";
    echo "<tr><th>Daftar Smartphone Samsung</th></tr>";
    
    foreach ($merkSmartphone as $phone) {
        echo "<tr><td>$phone</td></tr>";
    }
    
    echo "</table>";
}

Smartphones();
?>

    </body>
</html>