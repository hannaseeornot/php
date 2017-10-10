
<?php 
	// echo "Hello World!";
	// 单行注释 快捷键：command + /
	#  单行注释 快捷键：shift + 3
	/*
	  多行注释 快捷键：alt + command +  /
	*/
	# variable 变量 
	/*
		- 前缀 $ 
		- 以字母、数字、下划线组成
		- 不能以数字开头
		- 大小写敏感
		- 驼峰命名法
	*/
    $output = "Hello World";
    // echo $output;
    # 数据类型
    /*
    	String  Integer ：整数 
    	Float ：浮点
    	Boolean Array Object Resource(函数)
    */
    $num = 22;
    $float = 22.22;
    $bool = true; //Boolean类型当值为false时，在浏览器中输出空，但是它的值就是false
    // echo $bool;

    # 运算符 + - * / 

    #字符串拼接
    $string1 = "Hello";  # 在PHP中+就是+，没有拼接功能
    $string2 = "World";
    // $greeting = $string1 + $string2 ;
    $greeting = $string1."        ".$string2."!";  //在拼接时多个空格按照一个空格处理
    echo $greeting;

    # PHP中引号的区别
    $greeting2 = '$string1 $string2';  //单引号中的内容时单纯的字符串，双引号中的内容可以正常解析
    $greeting3 = "$string1 $string2";
    echo $greeting2."<br>";  //如果想要换行拼接一个<br>标签
    echo $greeting3;

    # 转义字符
    $string3 = 'They\'re here';
    echo $string3,$string3;
    // printf($string3); // printf() 的输出速度要慢，并且有返回值1
    echo "<hr>";

    # 常量
    define("GREETING","What    Ever!");
    define("GREETING","What Ever!",true); # 常量的第三个参数为bool，true为不区分大小写
    // echo GREETING;
    var_dump(greeting); //输出函数，可以打印出类型（如果是数组或字符串的话会输出长度）



?>

