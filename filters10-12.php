<div class="container">
	<?php 
		# 检查是否存在data的name属性
		if(filter_has_var(INPUT_POST,"data")){
			echo " data 存在！";
			$email = $_POST["data"];
			# 过滤掉不合法的字符
			$email = filter_var($email,FILTER_SANITIZE_EMAIL); # 第一个参数是字符串，第二个参数是审核下的规则
			echo $email;
			# 验证是否是一个有效的邮箱
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				echo "邮箱合法！";
			}else{
				echo "邮箱不合法！";
			}
		}else{
			echo " data 不存在！";
		}
		/*
		审核规则 : 去掉不合法的字符
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/
		#  练习：
		# 验证一个变量中的值，是否是合法的整型
		echo "<br>";
		$var = '23';
		if (filter_var($var,FILTER_VALIDATE_INT)) {
			echo "数值";
		}else{
			echo "不是数值";
		}
        # 获取字符串中所有的数值
        echo "<br>";
        $var = 'kdlskf35345kn3k45nkl345345kln';
        $value = filter_var($var,FILTER_SANITIZE_NUMBER_INT);
		var_dump($value);

		# 特殊字符
		echo "<br>";
		$var = "<script>alert(1)</script>";
		# echo $var;
		echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);

		# 验证数组中每个元素
		echo "<br>";
		$filters = array(
			"data" => FILTER_VALIDATE_EMAIL,
			"data2" => array(
				'filter' => FILTER_VALIDATE_INT,
				'options' => array(
					'min_range' => 1,
					'max_range' => 130
				)
			)
		);
		print_r(filter_input_array(INPUT_POST,$filters));

		# 验证form表单中input的内容，第一个input一定是email 第二个input一定是数值，并且数值不能小于1，大于150
		echo "<br>";
		if (filter_input(INPUT_POST,"data",FILTER_VALIDATE_EMAIL)){
		    	$email = $_POST["data"];
		}else{
		    	$email = "邮箱不合法";
		}
		echo $email." : ";
		if (filter_input(INPUT_POST,"data2",FILTER_VALIDATE_INT)) {
    		$number = $_POST["data2"];
    		if ($number < 1 || $number > 150) {
    			echo $number." data2超出范围<br>";
	    	}else{
	    		echo $number."<br>";
	    	}
	    }else{
	    	$number = "data2不合法";
	    	echo $number."<br>";
	    }

if(filter_has_var(INPUT_POST,"data2")){
	$int = $_POST["data2"];
	if(filter_var($int<1 && $int>150,FILTER_VALIDATE_INT)>=0){
 		
		echo "";
		
	}else{
		echo $int;
	}
}else{
	echo "";
}


	    $arr = array(
	    	"name" => "henry",
	    	"age" => "30",
	    	"email" => "henry@gmail.com"
 	    );
 	    $filters = array(
 	    	"name" => array(
 	    		"filter" => FILTER_CALLBACK,
 	    		"options" => "ucwords"
 	    	),
 	    	"age" => array(
 	    		"filter" => FILTER_VALIDATE_INT,
 	    		"options" => array(
 	    			"min_range" => 1,
 	    			"max_range" => 150,
 	    		)
 	    	),
 	    	"email" => FILTER_VALIDATE_EMAIL
 	    );
 	    print_r(filter_var_array($arr,$filters));

 	    # filter_var_array 匹配变量数组
 	    # filter_input_array 匹配input提交的内容的数组
	 ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>filters / 过滤器</title>
	<!-- <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css"> -->
</head>
<body>
	<div class="container">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="data" class="form-control"><br>
			<input type="text" name="data2" class="form-control"><br>
			<button class="btn btn-primary btn-block" type="submit">提交</button>
		</form>
	</div>
</body>
</html>