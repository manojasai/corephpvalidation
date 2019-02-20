<?php
 session_start(); 
 ?>
<html>
	<head>
		<title>Test</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		
		<form name="form" action="add_submit.php" method="POST" enctype="multipart/form-data">
			
				Name:<input type="text" name="name"  id="name" >
				Description:<input type="text" name="description" id="description" >
				Price:<input type="text" name="price" id="price" >
				Image:<input type="file" name="image" id="image" >
				<input type="submit" name="submit"  value="Submit"  id="formsubmit">

		</form>
				
<script>
$('#formsubmit').click(function(e) {
	var error=0;
	var name = $('#name').val();
	if(name == ""){
		$('#name').css('border-color', 'red');
		error++;
	}
	else{
		$('#name').css('border-color', 'green');
	}
	
	var description = $('#description').val();
	if(description == ""){
		$('#description').css('border-color', 'red');
		error++;
	}
	else{
		$('#description').css('border-color', 'green');
	}
	
	var price = $('#price').val();
	if(price == ""){
		$('#price').css('border-color', 'red');
		error++;
	}
	else{
		$('#price').css('border-color', 'green');
	}
	
	var image = $('#image').val();
	if(image == ""){
		$('#image').css('border-color', 'red');
		error++;
	}
	else{
		$('#image').css('border-color', 'green');
	}
	
	if(error > 0){
		e.preventDefault();
	}
	
});
</script>						
	</body>
</html>