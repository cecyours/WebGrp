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
                            <label for="student_name" class="form-label">student_name</label>
                            <input type="text" class="form-control" id="student_name">
                        </div>
                        <div class="mb-3">
                            <label for="student_mark" class="form-label">student_mark</label>
                            <input type="number" class="form-control" id="student_mark">
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

    $(document).ready(function(){
        $("#btnSubmit").click(function(){

            var student_name = $("#student_name").val()
            var student_mark = $("#student_mark").val()

            if(student_mark=="" || student_name == "")
            {
                alert("is error or MT")
                return
            }

            $.ajax({
                url:'./S12_P01_student_ajax.php',
                type:'post',
                data:{
                    s_name:student_name,
                    s_mark:student_mark
                },
                success : function(response){

                    alert(response)
                }
            })
        })
    })

</script>

</html>