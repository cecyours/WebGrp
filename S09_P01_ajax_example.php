<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/min.css">
    <script src="./src/jq.js"></script>

</head>

<body>

    <section class="document">
        <?php
        $dateTime = new DateTime();
        echo $dateTime->format('Y-m-d H:i:s');
        ?>
        <form action="" method="POST">
            <div>
                <input type="number" name="txtNumberName" id="txtNumberId">
                <button type="submit" name="btnSubmit" class="btn btn-primary">show</button>

                <button type="button" id="btnCallAjax" class="btn btn-primary">call ajax</button>
            </div>
        </form>
        <div id="output"></div>
    </section>
</body>
<?php

if (isset($_POST['btnSubmit'])) {
    if ($_POST['txtNumberName'] > 33) {
        echo "Pass";
    } else {
        echo "BETTER LUCK NEXT TIME..";
    }
}
else{
    ?>
    <div id="output"></div>
    <?php
}
?>
<script>
    $(document).ready(function () {

        $("#btnCallAjax").click(function () {
            $.ajax({
                url: './S09_P02_ajax.php',
                data: {
                    number: $("#txtNumberId").val()
                },
                success: function (response) {
                    console.log(response)
                    $("#output").text(response)

                }
            })
        })
    })
</script>

</html>