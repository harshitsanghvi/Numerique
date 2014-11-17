//@Harshit Code Start
/**************************************************************
AJAX call for login.php from index.php.
Redirects to userhome.php
**************************************************************/
$("button#regbtn").click( function() {

	var username = $("#regusername").val();
	var password = $("#regpassword").val();
	var confirmpassword = $("#confirmpassword").val();

	if( username == "" )
	{
		$("div#regstatus").html("Please enter the username!");
	}
	else if(password == "")
	{
		$("div#regstatus").html("Please enter password!");	
	}
	else if(confirmpassword == "")
	{
		$("div#regstatus").html("Please enter confirm password!");	
	}
	else if(password != confirmpassword)
	{
		$("div#regstatus").html("Password does not match!");
		$("#regpassword").val();
		$("#confirmpassword").val();
		$("#regpassword").focus();
	}
	else
	{
		$.post( 'includes/register.php',
				{'username' : username, 'password' : password},
				function(data){
					alert(data);
					if(data == "failed")
					{
						$("div#regstatus").empty();
						$("div#regstatus").html("Oops!! Could not register right now!! Please try again later!!");
						clearReg();
					}
					if(data == "Successful")
					{
						top.location.href='registration.php';
					}
				});
	}
	
	$("#registerform").submit(function(){
		return false;
	});
});

function clearReg() {
	$("#registerform :input").each( function() {
	      $(this).val("");
	});
	$("#regusername").focus();
}


//@Harshit Code end