<?php 
	# array : 数组 有效的控制资源 - 存储一堆数据的集合
    /*
		下标数组：下标以0开始
		关联数组：关联以第一个名字开头
    */
	# 下标数组
	/*$people = array("Kevin","Henry","Hemiah");
	echo $people[1]; // echo只能打印单个数据不能打印数组
	# echo $people[3]; // 数组越界

	$ids = [23,56,42];
	echo $ids[2];

	$cars = ["Honda","Toyota","BYD"];
	$cars[3] = "BWM";
	echo count($cars);  // count() 计算数组中数据的个数

	#打印数组的方法
	print_r($cars);

	#万能打印方法
	var_dump($cars);

	# 关联数组
	$people = array("Henry" => 35,"Bukcy" => 25,"Emily" => 20);
	echo $people["Emily"];

	$ids = [22 => "Henry",25 => "Bukcy"];
	echo $ids[22];
	$ids[35] = "Emily";
	echo $ids[35]."<br>";
	// print_r($ids);

	# 观察
	$cars[] = "Bence";
	var_dump($cars);
	echo "<br>";
	$ids[] = "John";
	var_dump($ids);
	echo "<br>";
	$people[] = 55;
	print_r($people)
*/
	# 多维数组
	$cars = array(
		array("Honda",20,10),
		array("dz",20,20),
		array("Ford",15,10)
	);
	echo $cars[2][1];

?>