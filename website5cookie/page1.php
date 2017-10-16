<?php 

    # 监听用户是否触发了subimt方法
	if (isset($_POST['submit'])) {
		// echo "123";
		$username = $_POST['username'];
		setcookie('username',$username,time() + 86400*30); // 第一个参数是存储名字，第二个参数是存储的数据 ,第三个数据为过期时间
		header("location: page2.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1</title>
	
</head>
<body>
	<form method="POST" action=" <?php echo $_SERVER['PHP_SELF']; ?> ">
		<input type="text" name="username" placeholder="enter ur name!">
		<input type="submit" value="提交" name="submit">
	</form>
</body>
</html>