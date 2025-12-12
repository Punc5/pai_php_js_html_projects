<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje PHP - część 2.</title>
</head>
<body>
    <?php
        // Napisz skrypt, w którym zdefiniujesz funkcje wyświetlające ciąg znaków: 2, 4, 6, 8, ... dla przekazanej wartości n.
        function funkcja_wyświetlająca($n) {
            $k = 2;

            for($i = 1; $i <= $n; $i++) {
                echo "Wylosowana cyfra = " .$i. ", <br>";
                $k += 2;
            }
        }

        $z = funkcja_wyświetlająca(rand(1 ,10));
        echo "Funkcja wyświetlająca ciąg znaków = " .$z;
    ?>
</body>
</html>