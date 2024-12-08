<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
        $student = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ],
        ];

        echo "<table border='1' cellspacing='0' cellpadding='5'>";
        echo "<tr><th>Name</th><th>Program</th><th>Age</th></tr>";

        foreach($student as $member){
            echo "<tr>";
            echo "<td> {$member['name']}</td>";
            echo "<td> {$member['program']}</td>";
            echo "<td> {$member['age']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>