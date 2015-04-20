<?php
    $foo = "bob";
    $bar = &$foo; //将变量$foo的引用赋值给变量$bar（ 相当于bar 是 foo别名 ）   
    // bar 变量变动 foo 跟着变动
   
    $bar = "my name is tom"; //重新赋值新的字符串
    
    echo "$foo<br>";
    print "$bar\n";    

   $foo = "my name is aaa";
    
    echo $foo;
    echo $bar; 

?>
