<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class A{
            function __construct(){
                echo '<h1>i am created A</h1> ';
            }
        };
        class B extends A{
            function __construct(){
                // connect with database.
                echo "<h1>I am created B</h1>";
            }
        }
        $b = new B();
    ?>



</body>
</html>