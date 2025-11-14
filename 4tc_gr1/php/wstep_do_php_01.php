<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wstęp do php - część 1.</title>
</head>
<body>
    <form method="GET">
        <label for="A">A:</label>
        <input type="number" id="A" name="A" placeholder="Wpisz liczbę dla a" required>
        <br><br>

        <label for="B">B:</label>
        <input type="number" id="B" name="B" placeholder="Wpisz liczbę dla b" required>
        <br><br>

        <label for="C">C:</label>
        <input type="number" id="C" name="C" placeholder="Wpisz liczbę dla c" required>
        <br><br>
        
        <input type="submit" value="Sprawdź">
    </form>

    <?php
        // Napisz skrypt, w którym sprawdzisz czy z 3 przypisanych długości odcinków można zbudować trojkąt
        $a = $_GET['A'] ?? null;
        $b = $_GET['B'] ?? null;
        $c = $_GET['C'] ?? null;

         if (($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a) {
            echo "Trójkąt o wymiarach: " . $a . ", " . $b . ", " . $c . " można zbudować.<br>";
        } else {
            echo "Nie można zbudować trójkąta o podanych wymiarach. Podaj inne wartości.<br>";
        }
    ?>
</body>
</html>