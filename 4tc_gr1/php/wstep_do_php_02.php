<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wstęp do php - część 2.</title>
</head>
<body> 
    <?php
        // Napisz skrypt, który wyznaczy pierwiastki równania kwadratowego dla współczynników z przedziału od 1 do 20
        $a = rand(1, 20);
        $b = rand(1, 20);
        $c = rand(1, 20);

        $delta = pow($b, 2) - 4 * $a * $c;

        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "Delta jest większa od 0 - równanie kwadratowe ma 2 rozwiązania: x1 = $x1, x2 = $x2.";
        } elseif ($delta == 0) {
            $x0 = -$b / (2 * $a);
            echo "Delta jest równa 0 - równanie kwadratowe ma 1 rozwiązanie: x = $x0.";
        } else {
            echo "Delta jest mniejsza niż 0 - równanie kwadratowe nie ma rozwiązania.";
        }
    ?>
</body>
</html>