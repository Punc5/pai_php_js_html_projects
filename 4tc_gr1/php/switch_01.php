<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch - część 1.</title>
</head>
<body>
    <?php
        $ra = rand(1, 5);

        switch ($ra) {
            case 1: echo "Otrzymałeś ocenę 1";
            break;
              
            case 2: echo "Otrzymałeś ocenę 2";
            break;
            
            case 3: echo "Otrzymałeś ocenę 3";
            break;

            case 4: echo "Otrzymałeś ocenę 4";
            break;

            case 5: echo "Otrzymałeś ocenę 5";
            break;

            default: echo "Nie pisałeś testu! Otrzymałeś ocenę 0";
            break;
        }
    ?>
</body>
</html>