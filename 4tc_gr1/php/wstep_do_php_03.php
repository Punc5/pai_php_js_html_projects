<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wstęp do php - część 3.</title>
</head>
<body> 
    <?php
        // Napisz skrypt, który wyznaczy rozwiązanie układu równań dla różnej wartości x z przedziału od 11 do 20
        $x = rand(11, 20);
        echo "Wylosowane x: $x<br>";

        if ($x < -5) {
            echo "y = 0 (x jest mniejsze od -5)<br>";
        } elseif ($x === 3) {
            echo "y = 27 (x jest równe 3)<br>";
        } elseif ($x >= 10 && $x <= 20) {
            $y = pow($x, 2) + 3;
            echo "y = $y<br>";
        } else {
            echo "y = $x dla pozostałych x<br>";
        }
    ?>
</body>
</html>