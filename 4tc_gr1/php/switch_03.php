<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch - część 3.</title>
</head>
<body>
    <?php
        // Napisz skrypt, który przypisze 3 liczby wylosowane z przedziału od 1 do 20, a następnie za pomocą instrukcji switch wykona odpowiednie działanie wybierając +, -, *, /.
        $a = rand(1, 20);
        $b = rand(1, 20);
        $c = rand(1, 20);

        $dzialanie = "/";
        
        switch ($dzialanie) {
            case "+": echo "suma = " .$a + $b + $c;
                break;
            case "-": echo "rożnica = " .$a - $b - $c;
                break;
            case "*": echo "iloczyn = " .$a * $b * $c;
                break;
            case "/": echo "iloraz = " .$a / $b / $c;
                break;
        }
    ?>
</body>
</html>