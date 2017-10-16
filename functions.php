<?php 
	# function: 函数 - 具有某一功能的代码块  php中函数的名字大小写不敏感 
	/*
		Camel Case -myFunction()
		Lower Case - my_function()
		Pascal Case -MyFunction()
	*/
	# 定义函数  
	simpleFunction();
	function SimpleFunction(){
		echo "Hello World"."<br>";
	}

	# 由参数 无返回值 php函数中由参数就一定要进行传参
	function buy($money = "20块钱"){  # 括号中的定义为初始化，当没有实参传递时，使用默认值，实参的优先级比默认值高
		echo "给了".$money."，但没给买东西，拿钱跑了"."<br>";
	}
	buy("10块钱");

	# 多参数 又返回值
	function sumValue($num1 = 0,$num2 = 0){
		$num = $num1 + $num2;
		return $num;
	}
	echo sumValue(10,20)."<br>";

	# 无参数 有返回值
	function buyDrink(){
		return "没人给买"."<br>";
	}

	echo buyDrink();

	# 函数传引用
	$myNum = 10;
	function addFive (&$num){ // &为取地址符  
		$num += 5;  // 拿到了myNum的引用，改变了内存中的数值
		echo $num;
	}
	echo addFive($myNum)."<br>";
	echo $myNum."<br>";
	echo $myNum."<br>";
?>