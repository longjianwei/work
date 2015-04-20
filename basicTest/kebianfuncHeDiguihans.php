<?php
    function one($a,$b){
        return $a+$b;
    }
    function two($c,$d){
        return $c*$d;
    }
    
    $magic = "one";
    $magic2 = "two";
    
    echo "计算结果为".$magic(10,10);  // 可变函数   通过赋值来获取函数
    echo "<br>x result = ".$magic2(10,10)."<br>";
    echo "以上为可变函数（赋值变量=函数名部分）调用则赋值的变量加参数及可<br>";
    // 递归函数 即自调函数 内部直接或间接调用自己
    echo "-------------递归函数-------------------<br>";
    
    function digui($i){
        echo $i."&nbsp;";
        if($i>0)
            digui($i-1);
        else
            echo "<-->";
        echo $i."&nbsp;";
    }
    digui(20);


?>
