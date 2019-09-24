<?php 
$pageTitle = "Logout";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'componentes/head.php'; ?>
</head>
<body>
	<?php require_once 'componentes/navbar.php'; 

	require_once 'functions/config.php';
	$session_uid='';
	session_destroy();
	// $_SESSION['uid']='';
	// $_SESSION['name']='';
	// $_SESSION['area']=''; 
	// $_SESSION['profile']=''; 
	
		// $url=BASE_URL.'home.php';
		// header("Location: $url");
	header("Location:index.php")
	
		
	

	?>

</body>
</html>