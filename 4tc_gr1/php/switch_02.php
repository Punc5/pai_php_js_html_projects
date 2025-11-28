<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch - część 2.</title>
</head>
<body>
    <?php
        // Utwórz skrypt, w którym za pomocą instrukcji wyboru, który będzie pełnił funkcję przelicznika walut:
        // 1) 1 - $ -> PLN
        // 2) 2 - PLN -> $
        // 3) 3 - EUR -> PLN
        // 4) 4 - PLN -> EUR
        $waluta = rand(1, 4);

        switch ($waluta) {
            case 1: echo "$ -> PLN";
                break;
            case 2: echo "PLN -> $";
                break;
            case 3: echo "EUR -> PLN";
                break;
            case 4: echo "PLN -> EUR";
                break;
            default: echo "Nie wybrałeś żadnej waluty!";
                break;
        }
    ?>
</body>
</html>