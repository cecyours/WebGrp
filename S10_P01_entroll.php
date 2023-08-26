<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> kites </title>

    <!-- bootstarp css -->
    <link rel="stylesheet" href="./src/min.css">

    <!-- js query cdn -->
    <script src="./src/jq.js"></script>
</head>

<body>


    <section class="document">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form style='width:100%;'>
                        <div class="mb-3">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="fname" class="form-label">first Name</label>
                            <input type="text" class="form-control" id="fname">
                        </div>
                        <div class="mb-3">
                            <label for="rollno" class="form-label">rollno</label>
                            <input type="text" class="form-control" id="rollno">
                        </div>
                        <button type="button" id="btnSubmit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div id="output">
                        <span id="msg"></span>
                        <div id="describe"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<!-- jquqery function / main method -->
<script>
    $(document).ready(function () {
        $("#btnSubmit").click(function () {

            $.ajax({
                // request file name
                url: './S10_P01_ajax.php',
                data: {

                    usernamex:$("#username").val(),
                    fnamex:$("#fname").val(),
                    rollnox:$("#rollno").val(),
                },
                type:'post',
                dataType:'json',
                success: function(response){
                    $("#msg").text(response.msg)
                    $("#describe").text(response.describe)
                    console.log(response)
                    
                }
            })
        })
    })
</script>

</html>