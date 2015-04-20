<?php
    
    // 可变变量
    $hi = "hello";
    $$hi = "world";

    echo "$hi,$hello<br>";
    echo "$hi,$$hi<br>";
    echo "$hi,${$hi}";



?>
