<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		session_start();
		$_SESSION[] =  array();
		//session_destroy();// xóa hết tất cả session
		unset($_SESSION["User"]); // chỉ xóa $_SESSION['User']
		header("Location:login.php");
	?>
</body>
</html>