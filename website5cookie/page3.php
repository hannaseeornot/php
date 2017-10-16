<?php 

	$users = ["name" => "Henry","email"=>"henry@gmail.com","age"=>30];
	$users = serialize($users);  // 把数组转换为字节流
	setcookie('users',$users,time() + 86400);

	$users = unserialize($_COOKIE['users']);
	print_r($users);
 ?>