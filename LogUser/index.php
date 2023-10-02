<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require './statics/const.php';

    ?>
    <title>Document</title>
</head>

<body>
    <?php
    require __DIR__ . '/statics/header.php';
    ?>

        <section class='content_coder'>
            Hello world
        </section>
    <?php
    require __DIR__ . '/statics/footer.php';

    ?>
</body>

</html>