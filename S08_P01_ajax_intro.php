<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/min.css">
    <script src="./src/jq.js"></script>

    <style>
        #sample {
            background: red;
        }
    </style>
</head>

<body>

<input  class="form-control" id='userInput'/>
    <button id="btnCode">
        Click me
    </button>
    <div id="sample1">
    </div>
    <div id="sample2">
    </div>
    <div id="sample">
    </div>
</body>

</html>

<script>
    $(document).ready(function () {
        $("#btnCode").click(function () {
            $("#sample1").text("<h1>Hello Coder</h1>")
            $("#sample2").html("<h1>Hello Coder</h1>")
            $.ajax({
                url:'S08_P01_request.php',
                data:{
                    username:$("#userInput").val()
                },
                success:function(html){

                    $("#sample").html(html)
                }
            })
        })
    })
</script>