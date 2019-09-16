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
	$_SESSION['uid']='';
	$_SESSION['name']='';
	$_SESSION['profile']=''; 
	if(empty($session_uid) && empty($_SESSION['uid']))
	{
		$url=BASE_URL.'index.php';
		header("Location: $url");
	//echo "";
	}


	?>

</body>
</html>