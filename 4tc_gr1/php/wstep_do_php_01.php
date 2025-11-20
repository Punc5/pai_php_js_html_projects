<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wstęp do php - część 1.</title>
</head>
<body>
    <form method="POST">
        A: <input type="number" name="A" required>
        B: <input type="number" name="B" required>
        C: <input type="number" name="C" required>
        <input type="submit" value="Sprawdź">
    </form>

    <?php
        // Napisz skrypt, w którym sprawdzisz czy z 3 przypisanych długości odcinków można zbudować trójkąt
        if (isset($_POST['A'], $_POST['B'], $_POST['C'])) {
            $a = $_POST['A'];
            $b = $_POST['B'];
            $c = $_POST['C'];

            if (($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a) {
                echo "Można zbudować trójkąt.";
            } else {
                echo "Nie można zbudować trójkąta.";
            }
        }
    ?>
</body>
</html>