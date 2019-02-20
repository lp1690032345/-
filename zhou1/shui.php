<?php 

//水仙花数

function shui($n,$m)
{
	 $arr = [];
     for ($i=$n; $i <=$m; $i++) { 
         if (strlen($i) !=3) {
         	continue;
         }
         $g = $i%10;  //求个位数
         $s = floor($i%100/10); //求十位数
         $b = floor($i%1000/100); ///求百位数

         $sum = pow($g,3)+pow($s,3)+pow($b,3);

         if ($i == $sum) {
         	$arr[] = $i;
         }


     }
     return $arr;
}
// print_r(shui(1,1000));

//首先出现三次的英文字母

function cishu($str)
{
	 $str = str_replace(' ', '', $str);
     $len = strlen($str);
     
     $arr = [];
     for ($i=0; $i <$len ; $i++) { 
     	for ($k=0; $k <$len ; $k++) { 
     		if (isset($arr[$str[$k]])) {
     	 	   $arr[$str[$k]]++;
     	 	   if ($arr[$str[$k]] == 3) {
     	 	   	  return $str[$k];
     	 	   }
     	    }
     	    else
     	    {
     	    	$arr[$str[$k]] = 1;
     	    }
     	}
     	 
     }

}
// print_r(cishu('hhhelllo world'));

//判断是否是回文字符串
function huiwen($str)
{
	$len = strlen($str);
	$start = 0;
	$end = $len-1;

	$count = floor($len/2);
	if ($len <2) {   //如果字符串长度小于二
		return false;  //则不是回文
	}

	for ($i=0; $i <$count ; $i++) { 
		if ($str[$start] == $str[$end]) {
			$start++;
			$end--;
		}
		else
		{
			return false;
		}
	}
	return true;
}
// var_dump(huiwen('aas'));
//斐波那契数列
function fbnq($n)
{
	$arr = [];
	for ($i=1; $i <=$n ; $i++) { 
		if ($i == 1||$i==2) {
			$arr[$i] = 1;
		}
		else
		{
			$arr[$i] = $arr[$i-1] + $arr[$i-2];
		}
	}
	return $arr;
}
// print_r(fbnq(10));

//传入一个十进制数字，返回数字对应的英文字母：
function zimu($n)
{
    $arr = range('a','z'); //将a-z存入数组
    // print_r($arr);die;
    $jg = [];
    $count = count($arr);
    $shang = floor($n/$count); //计算出商
    $rem = $n%$count;  //求出余数
    // print_r($shang);die;
    while ($n) {
    	if ($shang == 0) {
    		// print_r($arr[$count-1]);die;
    		array_shift($arr[$count-1],$jg);
    	}
    	else
    	{
    		$shang--;
    		array_shift($jg,$arr[$rem-1]);
    	}
    }

    return implode('',$jg);
}

// print_r(zimu(1));

//传入一个数字n代表台阶的个数，每次只能走1阶或者2阶台阶，返回走到第n阶台阶一共有多少种走法

function zou($n)
{
	$arr = [];
	for ($i=1; $i <=$n ; $i++) { 
		if ($i == 1) {
			$arr[$i] = 1;
		}
		else if ($i == 2) {
			$arr[$i] = 2;
		}
		else
		{
			$arr[$i] = $arr[$i-1] + $arr[$i-2];
		}
	}
	return $arr[$n];
}

print_r(zou(2));
















 ?>