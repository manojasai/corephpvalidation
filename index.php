<?php
 session_start(); 
 ?>
<html>
	<head>
		<title>Test</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		
		<form name="login-form" action="login_action.php" method="POST" >
			<input type="text" name="username" id="username" placeholder="Username" >
									
			<input type="password" name="password" id="password" placeholder="Password">
			
			<input type="submit" name="submit" value="Submit" id="formsubmit">
						
		</form>
		<?php
			if(isset($_SESSION['message'])){
				echo $_SESSION['message'];
			}
			unset( $_SESSION['message'] );
		?>
		
<script>
$('#formsubmit').click(function(e) {
	var error=0;
	var username = $('#username').val();
	if(username == ""){
		$('#username').css('border-color', 'red');
		error++;
	}
	else{
		$('#username').css('border-color', 'green');
	}
	
	var password = $('#password').val();
	if(password == ""){
		$('#password').css('border-color', 'red');
		error++;
	}
	else{
		$('#password').css('border-color', 'green');
	}
	
	if(error > 0){
		e.preventDefault();
	}
	
});
</script>								
	</body>
</html>