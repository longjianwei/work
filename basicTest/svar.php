<?php
    // bool 类型 false 一般 空（NULL）或者空的数组 array();
    var_dump((bool)"");               // bool(false) 
    var_dump((bool)01);
    var_dump((bool)array());          // bool(false)
    var_dump((bool)-2);
    var_dump((bool)"foo");
    var_dump((bool)"2.3e5");
    var_dump((bool)array(10));
    var_dump((bool)"false");

    echo "<br>";
    echo "以上为bool类型输出(var_dump(bool)变量类型)<br>";
    echo "<br>------------------<br>";

    echo "integer 类型<br>";
    $int1 = 1234;
    $int2 = -1234;
    $int3 = 0123;
    $int4 = 0x1a;
    var_dump($int1);
    var_dump($int2);
    var_dump($int3);
    var_dump($int4);
    var_dump(2147483647); // 整型-2147483648 ~ 214783647 之间（32位炒作系统）
    var_dump(2147483648); // 仅32位炒作系统
    var_dump(99999999999999999999999999999999999); //通常表示整型无法表示的数据

    echo "<br>------------------<br>";
    echo "float 类型<br>";
    $float1 = 1.234;
    $float2 = 1.2e3;    // 代表 1.2 * 10的3次方
    $float3 = 7e-2;    // 代表 7*10的负-2次方
    var_dump($float1);
    var_dump($float2);
    var_dump($float3);

    echo "<br>------------------<br>";
    echo "string 类型<br>";
    echo 'this is simple string<br>';
    echo 'this is\'simple\'string<br>'; //使用 \转译‘’
    $str = 100;
    echo 'this is $str string<br>';
    echo "$str's string<br>";             //有效'在变名中无效
    //echo "$strs string<br>";
    echo "${str}s string<br>";
    echo "{$str}s string<br>";
    echo "<br>-------------------<br>";
    echo "array 类型<br>";
    // key 可以是整型或字符串string型 value 可以是任何值
    $arr = array("foo"=>"bar", 12 => true, 13 => 1.4e2);
    print_r($arr);
    echo "<br>-------------------<br>";
    // object 类型
    class person{
        var $name;
        function say(){
            echo "hello foo.";
        }
    }
    $p = new person;
    $p->name="tomm";
    $p->say();
 
?>
