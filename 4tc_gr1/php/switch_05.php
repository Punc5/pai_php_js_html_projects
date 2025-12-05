<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch w PHP - część 4.</title>
</head>
<body>
    <?php
        // Napisz program w PHP, w którym za pomocą instrukcji wyboru switch obliczysz obwody figur:
        // - h - kwadrat
        // - b - prostokąt
        // - t - trójkąt
        // - r - romb
        $a = rand(1, 20);
        $b = rand(1, 20);
        $c = rand(1, 20);

        $h = rand(1, 20);
        
        $l = 0;

        $wybor = ["h", "b", "t", "r"];
        $wylosowanyWybor = $wybor[array_rand($wybor)];

        switch ($wylosowanyWybor) {
            case "h": 
                echo "Obwód kwadratu = " .($a * 4);
                break;
            case "b": 
                echo "Obwód prostokąta = " .(($a * 2) + ($b * 2));
                break;
            case "t": 
                echo "Obwód trójkąta = " .($a + $b + $c);
                break;
            case "r": 
                echo "Obwód rombu (4 * a) = " .($a * 4). "<br>";
                echo "Obwód rombu (a * h) = " .($a * $h);
                break;
            default: 
                echo "Nie wybrałeś żadnej figury!";
                break;
        }
    ?>
</body>
</html>