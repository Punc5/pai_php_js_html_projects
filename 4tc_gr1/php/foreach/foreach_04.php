<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach - część 4.</title>
</head>
<body>
    <?php
        // Napisz skrypt, w którym utworzysz tablice asocjacyjną uczeń, która będzie zawierała: uczeń, nazwisko, ocenę z informatyki.
        // Wyświetl imię i ocenę ucznia używając kluczy oraz wyświetl wszystkie klucze i id i wartości pętlą foreach.

        $uczen = ['imie' => 'Mirosław', 'nazwisko' => 'Kowalski', 'ocena' => 5];

        echo "Uczeń = " . $uczen["imie"] . "<br>";
        echo "Ocena z informatyki = " . $uczen["ocena"] . "<br><br>";

        $id = 0; 
        
        foreach ($uczen as $klucz => $wartosc) 
            echo "ID = $id<br>" . "Klucz = $klucz<br>" .  "Wartość = $wartosc<br><br>";
            $id++;
        ?>
</body>
</html>