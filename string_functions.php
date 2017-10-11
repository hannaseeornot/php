<?php 
	# string functin: 处理字符串的函数
	# 返回字符串的一部分 substr
	$output = "HelloWorld";
	#$output = substr($output, 1);
	echo substr($output,1,5)."<br>";
	
	# 返回给定的字符串 string 的长度  strlen
	echo strlen($output)."<br>";

	# 查找字符串首次出现的位置 strpos
	echo strpos($output,"Wo")."<br>";
	
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	echo strrpos($output,"l")."<br>";
	
	# 去除首尾空格trim
	$output = "   HelloWorld  ";
	echo strlen($output)."<br>";
	$newString = trim($output);
	echo strlen($newString)."<br>";
	
	# 将字符串转为大写 strtoupper
	$str = "hello world";
	echo strtoupper($str)."<br>";
	
	# 将字符串转为小写 strtolower
	$str = "HELLO WORLD";
	echo strtolower($str)."<br>";
	
	# 将每个单词首字母大写 ucwords
	$str = "hello world";
	echo ucwords($str)."<br>";
	
	# 替换所有匹配的内容  str_replace
	$str = "hello world";
	echo str_replace("world","Everybody",$str)."<br>";
	
	# 判断是否是字符串  is_string
	$str = "22";
	echo is_string($str)."<br>";

	# 过滤掉数组中非字符串的值
	$str =array("hello","world",22,true,false,"23");
	foreach ($str as $value) {
		# 判断value是否为字符串，如果是，那么输出
		if (is_string($value)) {
			echo $value." is a string!<br>";
		}
	}
	
	# 压缩字符串  gzcompress
	$str = "一大堆文字";
	$compressed = gzcompress($str);
	echo $compressed."<br>";


	# 解压字符串 gzuncompress
	echo gzuncompress($compressed)."<br>";
?>