<?php 
	session_start();
	// unset($_SESSION['name']);  # 删除session中的name的值
	session_destroy();   # 删除session中的所有内容

 ?>