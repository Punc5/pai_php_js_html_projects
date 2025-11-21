<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while - część 3.</title>
</head>
<body>
    <?php
        // Napisz skrypt, w którym za pomocą pętli do while będzie wyświetlał liczby losowane z przedziału od 1 do 1000.
        // Losowanie liczb powinno zakończyć się w momencie kiedy wylosuje liczbę z przedziału od 50 do 100 lub 200 do 300.
        // Wyświetl wylosowane liczby.
        $ilosc = 0;

        do {
            $liczba = rand(1, 1000);

            $ilosc++;
        } while (!(($liczba >= 50) && ($liczba <= 100)) || (($liczba >= 200) && ($liczba <= 300)));

        echo "wylosowana liczba = " .$liczba. "<br>";
        echo "ilość wylosowanych liczb = " .$ilosc. "<br>";
    ?>
</body>
</html>