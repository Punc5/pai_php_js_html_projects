<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While - część 2.</title>
</head>
<body>
    <?php
        // Napisz skrypt, w którym za pomocą pętli while wyświetlisz kolejne wyrazy w ciągu: 5, -10, 15, -20, 25, -30, ...

        $k = 5;

        while($k <= 30) {
            echo $k. "<br>";
            
            if($k % 2 == 0) {
                $k *= -1;
            } else {
                $k *= 1;
            }

            $k += 5;
        }
    ?>
</body>
</html>