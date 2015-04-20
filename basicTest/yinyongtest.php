<?php
    $num =10;
    function demo(&$num){
        $num = $num +20;
        echo $num."\n";
    }
  echo " // demo(&$num); //错误 调用或实例化函数 使用&引用报错（该引用变量进入函数内部已经改变初始值找不到之前定义变量$num=10 的引用地址）<br>";
    demo($num);
   //  demo(20);  // 错误之前以定义为变量 
    echo $num;
    //--------------------------------------
    $quanvar = "hello longjianwei" ;
    function ssum(){
        $a=1;
        $a++;
        global $quanvar;  // 全局变量作用于外部
        $quanvar = "hi neng gaibian ni ma?";
        echo "<br>".$quanvar."<br>"; // 内部则局部变量能赋值给全局变量
    } 
    echo "<br>".$quanvar;
    ssum();
    //echo $a;  //echo $a; $a为局部变量，函数外部直接访问错误 
    $emt = FALSE;
    if(empty($emt)){
        echo "NULL";
    }else{
        echo "hava value";
    } 
    
?>
