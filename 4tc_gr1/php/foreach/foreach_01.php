<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach - część 1.</title>
</head>
<body>
    <?php
        $tab_1 = array(0, 1, 2, 3, 4);
        $tab_1 = array(1, 2, 6, 3, 10);

        echo $tab_1[1];

        for ($i = 0; $i < 10; $i++) {
            $tab_1[$i] = rand(1, 50);
            if ($tab_1[$i] % 3 == 0) {
                echo $tab_1[$i] . ",";
            }
        }

        echo "<br>";

        $dl = count($tab_1);

        foreach ($tab_1 as $w)
            echo $w . ",";
            echo "<br>";
    
        $tab_1 = array(1, 8, 10, 20, 30);
        $tab_2 = ['jabłko', 'gruszka', 'pomarańcza'];
        $tab_2[] = 'winogrono';

        $uczen = ['imie' => 'Jan', 'nazwisko' => 'Kowalski', 'ocena' => 5];
        
        echo "<br>";

        echo $uczen['imie'] . ' - ' . $uczen['ocena'] . "\n";
        echo "<br>";

        foreach ($uczen as $klucz => $wartosc)
            echo $klucz . ': ' . $wartosc . "\n";
        echo "<br>";
    ?>
</body>
</html>