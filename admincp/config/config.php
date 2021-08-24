<?php 

	$mysqli = new mysqli("sql6.freesqldatabase.com","sql6431813","Q6B9IGFRlL","sql6431813");

	// Check connection
	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}

?>
