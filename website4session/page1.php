<?php 
	if(isset($_POST['submit'])){
		// echo "123";
		session_start();
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['email'] = $_POST['email'];
		header("Location: page2.php");

	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="name" placeholder="enter name">
		<input type="text" name="email" placeholder="enter email">
		<input type="submit" name="submit" value="提交">
	</form>
</body>
</html>