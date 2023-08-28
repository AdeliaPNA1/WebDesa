<?php
include ("../inc/koneksi.php");
session_start();

// echo md5("indah1234");
if (isset($_POST['login']))
{
	global $conn;
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = md5(mysqli_real_escape_string($conn,$_POST['password']));

	$sql = "SELECT * FROM admin WHERE username='".$username."' AND password='".$password."' ";
	$result = mysqli_query($conn,$sql);
	
	if (mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result);
		$_SESSION['username'] = $row['username'];
		header("Location: indexadmin.php");
		exit;
		}
	$error = true;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="../admin/style.css">
</head>
<body>
	<div class="w25 fn loginpage">
		<div class="logo">
			
		</div>
		<h1>Login</h1>
		<hr>
		<h4>
			<?php if( isset($error)):?>
				<p style="color: red; font-style: italic">username atau password salah</p>
			<?php endif;?>	
		</h4>
		<div class="container">
			<form action="" method="POST">
				<div class="user">
					<label>Username</label>
					<br>
					<input type="text" name="username" placeholder="Username" class="form100">
			    </div>

			    <div class="user">
			    	<label>Password</label>
			    	<br>
			    	<input type="password" name="password" class="form100">
			    </div>

				<input type="submit" name="login" value="Login">
				<p class="login-register-text">Anda belum punya akun? <a href="registrasi.php">Register</a></p>
			</form>
		</div>
	</div>

</body>
</html>
