<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for w PHP - część 5.</title>
</head>
<body> 
    <?php
    // Napisz skrypt, w którym za pomocą pętli for obliczysz wartość wyrażenia: 3 - 5 + 7 - 9 + 11 - 13 + ...
    $k = 3;
    $suma = 0;
    $n = rand(2, 16);

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $suma -= $k;
        } else {
            $suma += $k;
        }
        
        $k += 2;
    }

    echo "Suma wartości = " .$suma;
    ?>
</body>
</html>