<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach - część 5.</title>
</head>
<body>
    <?php
        // Napisz skrypt, w którym 
        // 1) Utworzysz 20-elementową tablicę, a następnie przypiszesz do tablicy przypisane wylosowane wartości z przedziału od 20 do 80.
        // 2) Obliczysz iloczyn z wartości, które będą mieścić się w przedziale od 20 do 80
        // 3) Obliczysz sumę z wartości indeksów tablicy, które są nieparzyste
        // 4) Wyświetlisz zawartość tablicy w odwrotnej kolejności

        // 1)
        for ($i = 0; $i <= 20; $i++)
            $tab[$i] = rand(20, 80);

        foreach ($tab as $ind => $w)
            echo "$ind : $w<br>";

        echo "<br>";

        // 2)
        $iloczyn = 1;

        foreach ($tab as $liczba)
            if ($liczba >= 20 && $liczba <= 80)
                echo "iloczyn = " . $iloczyn *= $liczba;

        echo "<br>";

        // 3)
        $suma = 0;

        foreach ($tab as $ind => $liczba)
            if ($ind % 2 != 0)
                echo "suma = " . $suma += $liczba;

        echo "<br>";

        // 4)
        for ($i = count($tab) - 1; $i >= 0; $i--)
            echo "$i : $tab[$i]<br>";

        echo "<br>";

        echo "Iloczyn wartości w przedziale od 20 do 80 = $iloczyn<br>";
        echo "Suma wartości indeksów nieparzystych = $suma<br>";
    ?>
</body>
</html>
