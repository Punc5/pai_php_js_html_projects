<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach - część 2.</title>
</head>
<body>
    <?php
        $tab_1 = ['imie' => 'Mariusz', 'nazwisko' => 'Kamysz', 'zawód' => 'kominiarz'];

        foreach ($tab_1 as $ind => $w)
            echo "$ind : $w<br>";

        echo "<br>";
        
        $tab_2 = ['imie' => 'Jan', 'nazwisko' => 'Kowalski', 'zawód' => 'śluszarz'];

        foreach ($tab_2 as $ind => $w)
            echo "$ind : $w<br>";
    ?>
</body>
</html>