<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while - część 4.</title>
</head>
<body>
    <?php
        // Napisz skrypt, w którym za pomocą pętli do while:
        // a) Losuje liczby całkowite od 1 do 10 i je wyświetla
        // b) Sumuje wylosowane liczby do momentu aż wartość przekroczy 50
        // c) Jeśli program wylosuje liczbę dziesięć, natychmiast przerywa losowanie
        // d) Po zakończeniu pętli program wyświetli sumę wylosowanych liczb oraz ilość liczb, które wylosował
        $haslo = "";
        $dlugosc = 0;
        
        do { 
            $rand = rand(0, 90);
            $haslo *= $rand;
            $dlgosc++;
        } while ($dlugosc < 50);

        echo $haslo;
    ?>
</body>
</html>