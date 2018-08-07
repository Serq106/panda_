<?php
	session_start();
	include_once("../bd.php");
	echo ($login = $_POST['Email']);
	echo ($password = $_POST['Passwors']);
	echo ($copy_password = $_POST['CopyPassword']);
	echo ($email = $_POST['Login']);
	$connect = logs();
	if($password == $copy_password){
		$result = mysqli_query($connect, "INSERT INTO `users` (`id_user`,`login`,`password`,`email`)
		VALUES (null, $login ,$password ,$email )");

		echo ("
		<script type='text/javascript'>
			location.replace('http://localhost/panda1_2/account.php');
		</script>
		");
		
	} else {
		echo ("
		<script type='text/javascript'>
			location.replace('http://localhost/panda1_2/view/SignUp.htmls');
		</script>
		");
	}
	

	
?>

