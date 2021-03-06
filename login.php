<?php 
 
include 'config.php';
 
session_start();
 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM login WHERE name='$name' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['name'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html>


<head>

	<!-- Meta Including Start -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- End of Meta Including -->

	<!-- Title Start -->
	<title>Login | Travelinary</title>
	<!-- End of Title -->

	<!-- CSS and JavaScript Including File -->
	<link rel="icon" type="image/png" href="assets/logo/travelinaryIcon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/tes.css">
	<script src="assets/js/fontawesome.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
	<!-- End of Including File -->

</head>

<body>

	<!-- Logo Start -->
	<div class="logo">
		<a href="index.php4">
			<img src="assets/logo/travelinary.png" alt="Logo Travelinary">
		</a>
	</div>
	<!-- End of Logo -->

	<!-- Login Box Start -->
	<div class="box">
		<h2>Login</h2>
		<form action="" method="POST">
			<div class="inputBox">
				<input type="text" name="name" required></input>
				<label>Username</label>
				<span class="input user"></span>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required></input>
				<label>Password</label>
				<span class="input pass"></span>
			</div>
				<div class="d-flex justify-content-between align-items-center mt-4">
					<input type="submit" class="btn" value="login"></input>
					<a href="register.php" class="mb-0 pb-0">Belum punya akun?</a>
				</div>
			
		</form>
	</div>
	<!-- End of Login Box -->

	<!-- Contact Start -->
	<div class="contact">
		<ul>
			<li><a href=""><span title="Facebook"></span></a></li>
			<li><a href=""><span title="Instagram"></span></a></li>
			<li><a href=""><span title="Twitter"></span></a></li>
			<li><a href=""><span title="WhatsApp"></span></a></li>
			<li><a href=""><span title="Gmail"></span></a></li>
		</ul>
	</div>
	<!-- End of Contact -->


	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
	<script>
		$('.authLogin').click(function(){
			localStorage.setItem('authLogin',true);
			window.location.href = 'index.php';
		});
	</script>
</body>

</html>
