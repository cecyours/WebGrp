
$(document).ready(function(){
    $("#btnSubmit").click(function(){
      var userEmail = $("#userEmail").val()
      var userPass = $("#userPassword").val()

        if(userEmail=="im@gmail.com" && userPass=="123")
        {
            alert("login done")
            window.location.href = "https://www.google.com"
        }
        else{
            alert("login failed..")
        }
    })
})