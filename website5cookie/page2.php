<?php 

	setcookie("username","gaibian",time()+86400); 
	# 删除cookie
	// setcookie("username",'asdf',time()-3600);
	if (count($_COOKIE)>0) {
		echo "一共有".count($_COOKIE)."cookie";
	}else{
		echo "没有cookie";
	}
	if (isset($_COOKIE['username'])) {
		echo "你的用户名是：".$_COOKIE['username'];
	}else{
		echo "用户名不存在！";
	}
 ?>