//@Harshit Code Start
/**************************************************************
AJAX call for login.php from index.php.
Redirects to home.php
**************************************************************/
$("button#loginbtn").click( function() {
	var username = $("#username").val();
	var password = $("#password").val();

	if( username == "" || password  == "" )
	{
		$("div#loginstatus").html("Please enter both username and password!");
	}
	else
	{
		$.post( 'includes/login.php',
				{'username' : username, 'password' : password},
				function(data){
					
					if(data == "failed")
					{
						$("div#loginstatus").empty();
						$("div#loginstatus").html("Incorrect username or password!");
						clearLogin();
					}
					if(data == "Successful")
					{
						top.location.href='home.php';
					}
				});
	}
	
	$("#loginForm").submit(function(){
		return false;
	});
});

function clearLogin() {
	$("#loginForm :input").each( function() {
	      $(this).val("");
	});
	$("#username").focus();
}


//@Harshit Code end