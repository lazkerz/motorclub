<?php
require("koneksi.php");

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (username, password, role) VALUES ('$username', '$password', 2)";
    
	if (mysqli_query($koneksi, $sql)) {
		echo '<script>alert("Akun berhasil dibuat");</script>';
		console.log("Alert berhasil ditampilkan");
		header('Location: register.php?success');
		exit();
	} else {
		header('Location: register.php');
		exit();
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php if(isset($_GET['success'])) { 
    echo "<script>
    setTimeout(() => {
        wpSuccess.classList.add('isAct')
        window.location.href = 'login.php'
    }, 1900)
    </script>";
    ?>
    <div class="wp__icon-success">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div id="success-icon"></div>
        <span class="text-white fs-5">Register berhasil!</span>
      </div>
    </div>
  	<?php } ?>
	<div class="wrapper d-flex justify-content-center align-items-center">
		<div class="img-bg-wp"></div>
		<div class="wrapp-login rounded-2 d-flex row align-items-center">
			<div class="input-field p-5">
				<h2 class="d-block text-center fw-bold mt-2">REGISTER</h2>
				<div class="input-group d-flex flex-column mt-5">
					<form method="POST">
					<div class="col mb-3">
						<label>Create Username</label>
						<input type="text" name="username" class="form-control fs border border-secondary rounded-3" required placeholder="Buat username yang sesuai">
					</div>
					<div class="col mb-3">
						<label>Create Password</label>
						<input type="password" name="password" class="form-control fs border border-secondary rounded-3" required placeholder="Buat kata sandi yang sesuai">
					</div>
					<div class="btn-wrapp">
					<input type="submit" name="register" class="btn btn-submit rounded-4 mt-4" value="Register">					
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>
const wpSuccess = document.querySelector('.wp__icon-success')
let anim = bodymovin.loadAnimation({
  container : document.querySelector('#loader-icon'),
  renderer : 'svg',
  loop : true,
  autoplay: true,
  path : 'js/loader.json'
})

let animSuccess = bodymovin.loadAnimation({
  container : document.querySelector('#success-icon'),
  renderer : 'svg',
  loop : true,
  autoplay: true,
  path : 'js/success-icon.json'
})

window.addEventListener('load', function() {
    const splash = document.querySelector('.splash');
    setTimeout(() => {
        splash.classList.add('display-none');
    }, 800);
});

</script>
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