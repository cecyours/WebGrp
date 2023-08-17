<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./src/min.css">
    <style>
        * {
            margin: 20px;
        }

        button {
            border-radius: 5px;
            border: 1px red solid;
            background: transparent;
            padding: 3px 20px;
        }
    </style>
</head>

<body>
    <?php

    echo "Hi There...";
    ?>

    <form action="http://www.google.com/search">
        <input type="text" name="q" placeholder="Google Search" />
        <button type="submit"> SUBMIT </button>
    </form>

    <form action="./S06_P01_welcome.php">
        <input type="text" name="name" placeholder="User name" />
        <input type="text" name="rollno" placeholder="User roll" />
        <button type="submit"> submit </button>
    </form>
</body>

</html>