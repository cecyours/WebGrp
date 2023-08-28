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
                    <!-- `user_name`, `user_password`, `user_email`, `user_phone`, `user_course` -->
                    <form style='width:100%;'>
                        <div class="mb-3">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="userpassword1" class="form-label">userpassword1</label>
                            <input type="password" class="form-control" id="userpassword1">
                        </div>
                        <div class="mb-3">
                            <label for="userpassword2" class="form-label">userpassword2</label>
                            <input type="password" class="form-control" id="userpassword2">
                        </div>
                        <div class="mb-3">
                            <label for="useremail" class="form-label">useremail</label>
                            <input type="email" class="form-control" id="useremail">
                        </div>
                        <div class="mb-3">
                            <label for="userphone" class="form-label">userphone</label>
                            <input type="phone" class="form-control" id="userphone">
                        </div>
                        <div class="mb-3">
                            <label for="usercourse" class="form-label">usercourse</label>
                            <input type="text" class="form-control" list="myList" id="usercourse">

                            <datalist id="myList">
                                <option value="python"></option>
                                <option value="java"></option>
                                <option value="html"></option>
                                <option value="php"></option>
                            </datalist>
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

            var username = $("#username").val()
            var userpassword1 = $("#userpassword1").val()
            var userpassword2 = $("#userpassword2").val()
            var useremail = $("#useremail").val()
            var userphone = $("#userphone").val()
            var usercourse = $("#usercourse").val()


            if(userpassword1==userpassword2)
            {
                $.ajax({
                    url:'./S11_Register_ajax.php',
                    type:'POST',
                    data:{
                        username:username,
                        userpassword:userpassword1, 
                        useremail:useremail,
                        userphone:userphone,
                        usercourse:usercourse
                    }, 
                    dataType:'json',
                    success:function(response)
                    {
                        console.log(response)
                    } 
                })
            }
            else{
                alert("password sdkfhdjsf")
            }
            
        })
    })
</script>

</html>