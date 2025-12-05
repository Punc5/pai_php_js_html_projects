<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje PHP</title>
</head>
<body>
    <?php
        // Budowa funkcji w PHP:
        // function nazwa (lista_parametrow) {
        //     instrukcje;
        //     return wartość;
        // }
        //
        // $w = return (lista_parametrow_aktualnych)

        // Przykład funkcji w PHP:
        function funkcja_1($a, $b) {
            $w = $a + $b;
            return $w;
        }

        $z = funkcja_1(5, 8);
        echo "Funkcja 1 = " .$z;
    ?>
</body>
</html>