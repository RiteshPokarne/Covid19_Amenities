<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: ../home1/index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: ../home1/index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
<style>
body{
background: url(../images/ritesh.jpg) no-repeat center center fixed; 
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
}
 </style>
  </head>
  <body>
    <?php require '../partials/_nav.php' ?>


	<div class="container my-4">
	<h1 class="text-center" style="color:White;">Login to our website</h1>
	<h5 class="text-center" style="color:Grey;">Don't have an account ? <a href="signup.php" >Register here</a></h5>
		<form action="" method="POST" class="login-email">
			
		<div class="form-group">
            <label for="username" style="color:White;">Email</label>
				<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="form-group">
            <label for="password" style="color:White;">Password</label>
				<input type="password" class="form-control"  placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn btn-primary">Login</button>
			</div>
			
			
			
		</form>
	</div>
</body>
</html>