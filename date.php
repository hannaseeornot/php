<?php 
	# echo date(); // 至少给一个参数
	echo date('d')."<br>"; # day
	echo date('m')."<br>"; # month
	echo date('Y')."<br>"; # Year 2017  year 17
	echo date('l')."<br>"; # day of week 
	echo date("Y/m/d"); # 年月日
	echo date("d-m-Y"); # 日月年

	# 时分秒
	echo date('h')."<br>"; # hour
	echo date('i')."<br>"; # minutes
	echo date('s')."<br>"; # seconds
	echo date('a')."<br>"; # AM or PM

	# 设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo date('h:i:sa')."<br>"; # AM or PM

	# mktime 时间戳
	$timestamp = mktime(07,00,12,5,1,2015);
	echo $timestamp."<br>";

	# 完整的时间
	echo date("m/d/Y h:i:sa",$timestamp)."<br>";

	# 字符串转时间
	$timestamp2 = strtotime("7:00pm March 22 2016");
	$timestamp3 = strtotime("tomorrow");
	$timestamp4 = strtotime("next sunday");
	$timestamp5 = strtotime("+2 Days");
	echo date("m/d/Y h:i:sa",$timestamp2)."<hr>";
	echo date("m/d/Y h:i:sa",$timestamp3)."<hr>";
	echo date("m/d/Y h:i:sa",$timestamp4)."<hr>";
	echo date("m/d/Y h:i:sa",$timestamp5)."<hr>";


?>