<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach - część 3.</title>
</head>
<body>
    <?php
        // Napisz skrypt, w którym zdefiniujesz tablicę z 20 wylosowanymi liczbami z przedziału od 1 do 100, a następnie:
        // 1) Wyświetlisz zawartość tablicy
        // 2) Obliczysz średnią arytmetyczną z wartości podzielnych przez 3
        // 3) Sprawdzisz, czy w tablicy znajduje się wartość 10
        // 4) Wyznaczysz (wyświetlisz) najmniejszą wartość tablicy

        // 1)
        for ($i = 0; $i < 20; $i++)
            $tab[$i] = rand(1, 100);

        echo "Zawartość tablicy<br>";

        foreach ($tab as $liczba)
            echo "$liczba<br>";

        echo "<br>";
        
        // 2)
        $suma = 0;
        $ilosc = 0;

        foreach ($tab as $liczba)
            if ($liczba % 3 == 0)
                $suma += $liczba;
                $ilosc++;
            echo "Średnia arytmetyczna z wartości podzielnych przez 3 = " . $suma / $ilosc;
        
        echo "<br><br>";

        // 3)
        foreach ($tab as $liczba) 
            if ($liczba == 10)
                $wartosc_10 = true;

        if (true)
            echo "W tablicy znajduje się wartość 10.";
        else
            echo "W tablicy nie ma wartości 10.";

        echo "<br><br>";

        // 4)
        $wartosc_min = min($tab);
        
        echo "Najmniejsza wartość w tablicy = " . $wartosc_min;
        ?>
</body>
</html>