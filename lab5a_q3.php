<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function multiplication($multiplier) {
        $results = [];

    for ($i = 1; $i <= 12; $i++) {
    $product = $i * $multiplier;

    $results[] = [
        'No' => $i,
        'Multiplier' => $multiplier,
        'Answer' => $product
        ];
    }
    return $results;
    }
    $multiplier = $_GET['multiplier'] ?? 2;
    $table = multiplication($multiplier);
    
    echo "<table border = '1' cellspacing = '0' cellpaddings = '5'>";
    echo "<tr><th>No</th><th>Multipler</th><th>Answer</th></tr>";

    foreach ($table as $row) {
        echo '<tr>';
        echo '<td>' . $row['No'] . '</td>';
        echo '<td>' . $row['Multiplier'] . '</td>';
        echo '<td>' . $row['Answer'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    ?>
</body>
</html>