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

            function display(){
                return "Hello Coder";
            }
        }

        class B extends A{
        
        };
        $b = new B(); 
    ?>

    <?=$b->display()?>

</body>
</html>