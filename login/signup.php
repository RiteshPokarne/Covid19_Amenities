<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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

    <title>SignUp</title>
<style>
body{
background: url(../images/pokarne1.jpg) no-repeat center center fixed; 
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
     <h1 class="text-center" style="color:White;">Signup to our website</h1>
	 <p class="text-center" style="color:Grey;">Have an account? <a href="login.php">Login Here</a>.</p>
		<form action="" method="POST" class="login-email">
            
		<div class="form-group">
            <label for="username"  style="color:White;">Username</label>
				<input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="form-group">
            <label for="Email" style="color:White;">Email</label>
				<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="form-group">
            <label for="password" style="color:White;">Password</label>
				<input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="form-group">
            <label for="cpassword" style="color:White;">Confirm Password</label>
				<input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
				<small id="emailHelp" class="form-text text-muted" style="color:White;">Make sure to type the same password</small>
			</div>
			<div class="input-group">
				<button name="submit" class="btn btn-primary">Register</button>
			</div>
			
		</form>
	</div>
</body>
</html>