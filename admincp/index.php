
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admincp</title>
	<link rel="stylesheet" type="text/css" href="css/styleadmin.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<?php
	
	 session_start();
	if(isset($_SESSION["User"])){
		$user=$_SESSION['User'];
		echo "<h3 align='right'>Xin chào bạn $user <a href='login.php'> Logout </a></h3> ";

	}else{
		header("Location:login.php");
		
	}
	
	
?>
<body>
	<h3 class="title_admin">Welcome to Admin management </h3>
	<div class="wrapper">
	<?php 
			include("config/config.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");
	?>
	</div>

</body>
</html>