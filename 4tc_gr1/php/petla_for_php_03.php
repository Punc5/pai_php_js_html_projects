<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for w PHP - część 3.</title>
</head>
<body> 
    <?php
    // Napisz skrypt, w którym za pomocą pętli for wyznaczy wartość wyrażenia: 2 + 6 + 10 + 14 + 18 + ...
        $n = rand(2, 12);
        $suma = 0;
        $k = 2;

        for ($i = 0; $i <= $n; $i++) {
            $suma += $k;
            echo $k. " + <br>";
            $k += 4;
        }  

        echo "= " .$suma. "<br>";
    ?>
</body>
</html>