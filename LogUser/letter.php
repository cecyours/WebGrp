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


    // check login requirement
    
    ?>

    <title>Document</title>
    <style>
        div.content {

            padding: 10px;
            width: fit-content;

            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <?php
    require __DIR__ . '/statics/header.php';
    ?>
    <?php

    if (!isset($_SESSION['user_id'])) {


        ?>

        <script>
            $(document).ready(function () {

                $("#logInBtn").click();

                $(".btn-close").click(function(){

                    //redirect to home page.
                    $("#toastTitle").text("Login Require")
                    $("#toastTitle").css("color",'red' )
                    $("#toastMsg").text('Please login..')
                    $('#liveToast').toast('show')
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                })
            })
        </script>
        <?php

    }
    ?>
    <section class='content_coder'>
        <div class='content'>
            <h1>Hello World
                <?= $_SESSION['user_name'] ?? '' ?>
            </h1>

        </div>
    </section>
    <?php
    require __DIR__ . '/statics/footer.php';

    ?>
</body>

</html>