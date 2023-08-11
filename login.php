<?php
require("koneksi.php");
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $cek = mysqli_num_rows($sql);

    if ($cek > 0) {
        $row = $sql->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        
        if ($row['role'] == 1) {
            header('location: hal/admin/index.php');
        } else if ($row['role'] == 2) {
            header('location: hal/user/index.php');
        } else {
            header('location: index.php?error');
        }
    } else {
        header('location: index.php?error');
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<div class="wrapper d-flex justify-content-center align-items-center">
		<div class="img-bg-wp"></div>
		<div class="wrapp-login rounded-2 d-flex row align-items-center">
			<div class="input-field p-5">
				<h2 class="d-block text-center fw-bold mt-2">LOGIN</h2>
				<div class="input-group d-flex flex-column mt-5">
					<form method="POST">
					<div class="col mb-3">
						<label>Username</label>
						<input type="text" name="username" class="form-control fs border border-secondary rounded-3" required placeholder="Masukan username yang sesuai">
					</div>
					<div class="col mb-3">
						<label>Password</label>
						<input type="password" name="password" class="form-control fs border border-secondary rounded-3" required placeholder="Masukan kata sandi yang sesuai">
					</div>
                    <a href="register.php" style="font-size: 12px; color: rgba(36, 174, 179, 0.9) ; text-decoration: none;">Do you have an account?</a>
					<div class="btn-wrapp">
						<input type="submit" name="login" class="btn btn-submit rounded-4 mt-4" value="Login">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

<?php 
if(isset($_GET['error'])){
  echo "<script type='text/javascript'>
			swal({
	  			title: 'Error',
	  			text: 'Maaf, NIP atau password anda tidak sesuai!',
	  			icon: 'error',
	  			button: 'OK',
			});
		</script>";
}
?>