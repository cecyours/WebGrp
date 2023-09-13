$(document).ready(function(){
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
        if($("userPassword1").val()!=$("#userPassword2").val())
        {

            $("#userPassword2Error").text("Not matched..")
        }
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