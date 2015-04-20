<?php

    $var = 'ls -al'; // 使用反引号 执行操作系统命令
    echo "<pre>$var</pre>";

    $x = 1;
    echo "$x<br>";
    ++$x;
    echo "$x<br>";     // ++x 自增+1 赋值给$x 结果x=2
    $y = $x++;         // x++ 先赋值x=2 给$y 结果$x再自增1 $x=3
    echo "$x<br>";
    echo "$y<br>";  
    
?>
