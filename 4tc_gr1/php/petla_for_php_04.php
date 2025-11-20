<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for w PHP - część 4.</title>
</head>
<body> 
    <?php
    // Napisz skrypt, w którym za pomocą pętli for obliczysz iloczyn z n wylosowanych liczb z przedziału od 1 do 10.
        $iloczyn = 1;
        $n = rand(1, 10);

        for ($i = 1; $i <= $n; $i++) {
            $liczba = rand(1, 10);
            $iloczyn *= $liczba;

            echo $liczba. " * ";
        } 

        echo " = " . $iloczyn . "<br>";
    ?>
</body>
</html>