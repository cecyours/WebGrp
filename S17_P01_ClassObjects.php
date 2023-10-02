<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Class</title>
</head>
<body>
        <?php  
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        
            class Demo{

                function say(){
                    echo "I am ";
                }
                function display($name)
                {
                    echo "<h1>Hello $name</h1>";
                }
            }

           $d = new Demo();
           $d->say();
           $d->display("Kites");
        
        ?>
</body>
</html>