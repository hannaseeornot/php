<?php 
	//分支  if & switch
    $num = 6;
    # if
    /*if($num <= 4){
    	echo "num的值一定是小于等于4";
    }*/

    #if else
    /*if($num >= 4){
    	echo "true";
    }else{
    	echo "false";
    }*/

    # nesting if (if 嵌套)
    /*if($num >= 4){
    	if ($num <= 10) {
    		echo "num一定是在4到10之间";
    	}else{
    		echo "num一定是大于10";
    	}
    }else{
    	echo "num一定是小于4";
    }*/

    # 逻辑运算符 
    /*  与和或都有短路现象：

    	逻辑与 && AND ：一假即假
    	逻辑或 || OR ：一真即真
    	逻辑非 ！
    	逻辑异或 XOR : 只有一边为真结果才为真
    */

    $num = 3;
    if ($num < 2 XOR $num > 10) {
    	echo "num 是大于3 并且小于10";
    }

    # switch 
    $favColor = 1;
    switch ($favColor) {
    	case '1':
    		echo "angry";
    		break;
    	case 'yellow':
    		echo "happy";
    		break;
    	case 'blue':
    		echo "silence";
    		break;
    	case 'green':
    		echo "forgive";
    		break;
    	default:
    		echo "GUN";
    		break;
    }
?>