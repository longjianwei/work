<?php
    function more_args(){
        $args = func_get_args();    // fuc_get_args()函数 将所有传递给函数的参数当作一个数组放回
        for($i=0;$i<count($args);$i++){
            echo "第".$i."个参数是".$args[$i]."<br>";
        }
    }
    more_args("one","two","three","four","five",1234); // 调用多个参数
?>
