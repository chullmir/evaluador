<?php 

// require_once 'functions/db_connection.php';
$pageTitle = "Login";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'componentes/head.php'; ?>
</head>
<body>
	<?php require_once 'componentes/navbar.php'; ?>
	<div id="login" class="container">
		<h3>Login</h3>
		<form method="post" action="index.php" name="login">
			<div class="form-group">			
				<label>Email</label>
				<input type="text" name="userEmail" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" autocomplete="off" class="form-control">
			</div>
			<div class="errorMsg"><?php echo ($_POST) ? $errorMsgLogin : ''; ?></div>
			<input type="submit" class="button btn btn-primary" name="loginSubmit" value="Login">
		</form>
	</div>
	<!-- <div class="container login">
		<h2>Ingresar</h2>
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div> -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>