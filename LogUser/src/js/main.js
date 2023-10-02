$(document).ready(function(){

    $("#btnLogOut").click(function(){


        $.ajax({
            url:'./api/user/index.php',
            type:'post',
            data:{
                request_:'logout_user'
            },
            dataType:'json',
            success:function(response){

                
                    $("#toastTitle").text(response.status)
                    $("#toastTitle").css("color",response.color )
                    $("#toastMsg").text(response.message)
                    $('#liveToast').toast('show')
                    setTimeout(() => {
                        window.location.reload();
                    }, 3000);
                
            }
            
            
        })
    })
    $("#btnLogin").click(function(){
        var  err = false
        
        
        if(isError("userNameEmail","Enter username/ email"))
        {
            err = true
        }
        if(isError("userPassword","Enter password"))
        {
            err = true
        }
        
        // rest code
        
        if(err)
         return
        console.log("Hiii")

            $.ajax({
                url:'./api/user/index.php',
                type:'post',
                data:{
                    request_:'verify_user',
                    userEName:$("#userNameEmail").val(),
                    userPass:$("#userPassword").val(),
                },
                dataType:'json',
                success:function(response){

                    $("#toastTitle").text(response.status)
                    $("#toastTitle").css("color",response.color )
                    $("#toastMsg").text(response.message)
                    $('#liveToast').toast('show')

                    if(response.status.toString()=="Success")
                    {
                        setTimeout(() => {
                            window.location.reload();
                        }, 3000);
                    } 
                }
            })
    })

    $("#btnSignUp").click(function(){

        var  err = false
        
        if(isError("userName","Fill this out.."))
        {
            err = true
        }

        if(isError("userEmail","Fill this out.."))
        {
            err = true
        }

        if(isError("userPassword1","Fill this out.."))
        {
            err = true
        }

        if(isError("userPassword2","Fill this out.."))
        {
            err = true
        }
        if($("#userPassword1").val()!=$("#userPassword2").val())
        {
            
            $("#userPassword2Error").text("Not matched..")
            err = true
        }
        // rest code

        if(err)
        {
            return;
        }
        
        $.ajax({
            url:'./api/user/index.php',
            type:'post',
            data:{
                request_:'create_user',
                userName:$("#userName").val(),
                userEmail:$("#userEmail").val(),
                userPass:$("#userPassword1").val(),
            },
            dataType:'json',
            success:function(response){
                console.log(response)
                // alert(response)
                $(".btn-close").click();
                $("#toastTitle").text(response.status)
                $("#toastTitle").css("color",response.color )
                $("#toastMsg").text(response.message)
                $('#liveToast').toast('show')
                setTimeout(() => {
                    window.location.reload();
                }, 3000);
            }            
        })
    })

    $(".form-control").focus(function(){

        var id = $(this).attr("id")
        // alert("id "+id)
        console.log(id)
        
        $("#"+id).css("border","1px #ced4da solid")

        $("#"+id+"Error").text("")
        
    })

    function isError(id,msg){

        if($("#"+id).val().trim()=="")
        {
            $("#"+id+"Error").text(msg)
            $("#"+id).css("border","1px red solid")
            return true
        }
        return false

    }
})