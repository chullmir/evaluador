<?php 
if ($_SESSION['profile'] != 'superadmin') {
	header("Location: index.php");
}

 ?>