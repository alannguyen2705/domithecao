<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			echo '<p style="color:green">You have successfully registered/p>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			header('Location:index.php?quanly=giohang');
		}
	}
?>
<br>
<h2 style="text-align:center; color: darkorange;">Sign Up</h2>
<div style="justify-content: center; display: flex;">
	
<style type="text/css">
	table.dangky tr td {
	    padding: 15px;
	}
</style>
<form style="text-align: center" action="" method="POST">
<table  class="dangky" border="1" width="50%" style="border-collapse: collapse;">
	<tr >
		<td>Full name</td>
		<td><input type="text" size="50" name="hovaten" required></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" size="50" name="email" required></td>
	</tr>
	<tr>
		<td>Phone</td>
		<td><input type="text" size="50" name="dienthoai" required></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" size="50" name="diachi" required></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" size="50" name="matkhau"></td>
	</tr>
	<tr>
		
		<td><input type="submit" name="dangky" value="Log In"></td>
		<td><a onclick="myFunction1()" href="index.php?quanly=dangnhap">Log in with your account</a></td>
	</tr>
</table>

</form>
</div>
<script>

function myFunction1() {
  alert("Moving to another account");
}
</script>