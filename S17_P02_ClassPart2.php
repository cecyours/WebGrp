<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    class Task
    {

        function sum($a, $b) //method
        {
            return $a + $b;
        }
        function sub($a, $b) // method
        {
            return $a - $b;
        }
    }

    $t = new Task();
    $x = 10;
    $y = 7;
    $z = $t->sum($x, $y);
    echo "<h1>$x+$y = $z</h1>";

    $z = $t->sub($x, $y);
    echo "<h1>$x-$y = $z</h1>";


    ?>
</body>

</html>