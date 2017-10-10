<?php 
	# loops ：循环 (高效) - 让项目制作的更高效
	
	#根据某个条件，重复执行某段代码
	
	/*
		- for ：
		- While:
		- Do...While :
		- Foreach : (底层封装用的是枚举，速度会快很多)
	*/
	# For 循环 @params - init ， condition(条件)，Inc(自增)
	/*
		for ($i = 0; $i < 10 ; $i ++) { 
			echo ($i+1)."<br>";
		}
	    echo $i."<br>";
    */
	# While 循环 #@params - condition
	/*
		$i = 0 ;
		while($i < 10){
			echo $i."<br>";
			$i ++;
		}	
	*/
	
	# do...while @params -condition 
	$i = 0;
	do{
		echo $i."<br>";
		$i ++;
	}while ($i < 10) ;

	# Foreach 循环 下标书组
	$people = array("Henry","Bucky","Emily");
	foreach ($people as $person) {  // as 前为要遍历的数组名 后面为接收变量
		echo $person."<br>";
	}

	#foreach 循环 关联数组
	$people = array("Henry"=>"henry@gmail.com","Bucky"=>"Bucky@gmail.com","Emily"=>"Emily@gmail.com");
	foreach($people as $name => $value) {
		echo $name.":".$value."<br>";
	}
	/*
	 	打印1~100之间7的倍数
	 	打印1~100之间个位为7的数
	 	打印1~100之间十位为7的数
	 	打印1~100之间个/十位非7且不是7倍数的数
	 	打印99乘法表
	*/
?>