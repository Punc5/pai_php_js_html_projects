<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch - część 4.</title>
</head>
<body>
    <?php
        // Napisz program w PHP, który pobiera (przypisuje): kwotę zamówienia oraz typ klienta (standard, gold, vip).
        // Za pomocą instrukcji switch przypisz wartość 10% standard, 20% gold, 50% vip.
        // Wyświetl kwotę rabatu w złotówkach.
        $kwota_zamowienia = rand(100, 450);

        $typ_klienta = "gold";

        switch ($typ_klienta) {
            case "standard": echo "standard = " .$standard = $kwota_zamowienia * 0.1. "<br>";
                break;
            case "gold": echo "gold = " .$gold = $kwota_zamowienia * 0.2. "<br>";
                break;
            case "vip": echo "vip = " .$vip = $kwota_zamowienia * 0.5. "<br>";
                break;
        }

        echo "kwota zamówienia = " .$kwota_zamowienia. "<br>";
    ?>
</body>
</html>