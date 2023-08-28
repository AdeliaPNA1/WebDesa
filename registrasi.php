<?php 
 
include ("../inc/koneksi.php");
 
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);
    
    if ($password == $password2) {
        
            $sql = "INSERT INTO admin (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['password2'] = "";
            } else {
                $in = mysqli_error($conn);

                echo "<script>alert('$in');</script>";

            }
        
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
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
        <h1>Register</h1>
        <hr>
        <div class="container">
            <form action="" method="POST">
                <div class="user">
                    <label>username</label>
                    <br>
                    <input type="text" name="username" placeholder="Username" class="form100">
                </div>
                <div class="user">
                    <label>Email</label>
                    <br>
                    <input type="text" name="email" placeholder="Email" class="form100">
                </div>
                <div class="user">
                    <label>Password</label>
                    <br>
                    <input type="password" name="password" class="form100">
                </div>
                <div class="user">
                    <label>Konfirmasi Password</label>
                    <br>
                    <input type="password" name="password2" class="form100">
                </div>

                <input type="submit" name="submit" value="Register">
                <p class="login-register-text">Anda sudah punya akun? <a href="index.php">Login</a></p>
            </form>
        </div>
    </div>

</body>
</html>