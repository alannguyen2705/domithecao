
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	// kết nối database
	require_once"config/config.php";
	
?>	
	
<?php
	// Đây là query lấy thông tin để login từ bảng account trong database
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$user =$_POST["txtUserName"];
			$pass =$_POST["txtPassWord"];
			
			$selectUser ="SELECT * FROM tbl_admin WHERE username='".$user."'";
			$result =$mysqli->query($selectUser);
			
			while($row=mysqli_fetch_assoc($result)){
				if($row["password"]== $pass){
					
					session_start();
					$_SESSION["User"] =$user;
					echo"session =".$_SESSION["User"];
					$role =$row['role'];
					
					if($role==1){// nếu là admin
						header("Location:admin.php");
					}else{
						header("Location:index.php");
					}
					exit;
						//echo"Login thành công";
				}else{
					echo"Login ko thành công";
				}
			}
			
		}
	
?>
<body>
	<form method="post" action="login.php">
	<table width="383" border="0" align="center">
  <tbody>
    <tr>
      <td colspan="2" align="center">Login</td>
      </tr>
    <tr>
      <td width="119">User Name:</td>
      <td width="248"><input type="text" size="30" name="txtUserName"/></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="Password" size="30" name="txtPassWord"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" value="Login" /></td>
    </tr>
  </tbody>
</table>

	</form>
</body>
</html>