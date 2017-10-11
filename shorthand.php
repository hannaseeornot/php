<?php 
	$loggedIn = false;
	$names = ["Henry","Bucky","Emily"]
	/*if($loggedIn){
		echo "U r logged In";
	}else{
		echo "U r NOT logged In";
	}

	# 三目运算符
	echo ($loggedIn) ? "U r logged In":"U r NOT logged In";
	echo "<br>";

	#简写得到 true或者false
	$isRegistered = ($loggedIn == true) ? true:false;
	echo $isRegistered;
	echo "<br>";

	# 三目嵌套
	$age = 18;
	$score = 80;
	echo "Your score is".($score > 70 ? ($age < 20 ? "优秀" : "一般") : ($age < 20 ? "一般" : "差等"));
	echo "<br>";*/
?>
<!-- HTML + PHP 嵌套语法糖 -->
<div>
	<?php if ($loggedIn){ ?>
		<p>Welcome to Beijing!</p>
	<?php }else{ ?>
		<p>Welcome to Zhengzhou!</p>
	<?php } ?>
</div>

<!-- 优化 -->
<div>
	<?php if ($loggedIn):?>
		<p>Welcome to Beijing!</p>
	<?php else: ?>
		<p>Welcome to Zhengzhou!</p>
	<?php endif; ?>
</div>
<!-- 遍历数组 -->
<div>
	<?php foreach ($names as $val): ?>
		<p><?php echo $val; ?></p>
	<?php endforeach; ?>
</div>

<!-- 遍历数组使用for循环 -->
<div>
	<?php for($i =0 ; $i < count($names);$i++): ?>
		<p><?php echo $names[$i]; ?></p>
	<?php endfor; ?>
</div>
