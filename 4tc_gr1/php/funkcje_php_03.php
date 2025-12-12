<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje PHP - część 3.</title>
</head>
<body>
    <?php
        // Napisz skrypt, w którym utworzysz funkcje:
        // a) obliczającą i zwracającą wartość wyrażenia: 1 * 3 * 5 * 7 * ... dla przekazanej wartości n
        // b) zwracającą sumę liczb parzystych wylosowanych z przedziału od 1 do 50
        function funkcja_obliczająca($n) {
            $iloczyn = 1;
            for($i = 0; $i < $n; $i++) {
                echo $i. ", <br>";
                $k = 2 * $i + 1;
                $iloczyn *= $k;
            }
            return $iloczyn;
            
        }

        function funkcja_zwracająca() {
            $suma = 0;
            for($j = 1; $j <= 50; $j++) {
                if($j % 2 == 0) {
                    $suma += $j;
                }
            }
            return $suma;
        }

        $rand = rand(1, 10);
        
        $funkcja_1 = funkcja_obliczająca($rand);
        echo "Funkcja obliczająca i wyświetlająca wylosowaną ilość ciągu znaków = " .$funkcja_1. "<br>";

        $funkcja_2 = funkcja_zwracająca();
        echo "Funkcja zwracająca sumę wylosowanych liczb parzystych = " .$funkcja_2;
    ?>
</body>
</html>