<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while - część 5.</title>
</head>
<body>
    <?php
        // Napisz skrypt, w którym za pomocą pętli do while:
        // a) Losuje liczby całkowite od 1 do 10 i je wyświetla
        // b) Sumuje wylosowane liczby do momentu aż wartość przekroczy 50
        // c) Jeśli program wylosuje liczbę dziesięć, natychmiast przerywa losowanie
        // d) Po zakończeniu pętli program wyświetli sumę wylosowanych liczb oraz ilość liczb, które wylosował
        $i = 0;
        $suma = 0;
        $wylosowaneLiczby = "";

        do {
            $rand = rand(1, 10);
            $wylosowaneLiczby .= $rand. ", ";

            $suma += $rand;
            $i++;
        } while (($suma < 50 || $suma = 50) && ($rand != 10));

        echo "Suma wylosowanych liczb = " .$suma. "<br>";
        echo "Wylosowane liczby = " .$wylosowaneLiczby;
        echo "Ilość wylosowanych liczb = " .$i;
    ?>
</body>
</html>