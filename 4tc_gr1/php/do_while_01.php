<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while</title>
</head>
<body>
    <?php
         // Napisz skrypt, który będzie obliczał iloczyn z wylosowanych liczb z przedziału od 1 do 50 i obliczał sumę tych liczb, które będą podzielne przez 5.
         // Dodawanie liczb powinno zakończyć się w momencie kiedy wylosuje liczbę 20.
         $suma = 0;

         do {
            $liczba = rand(1, 50);
            if($liczba % 5 == 0) {
                $suma += $liczba;
            }
         }
         while($liczba != 20);

         echo "suma = " .$suma;
    ?>
</body>
</html>