<?php
    require_once "Cxmlandjson.php";
?>
<html>
    <head>
    <meta http-equiv="content-type" content="text/xml;charset=utf-8" />
    <title>xml和json数据格式生成</title>
    </head>
    <body bgcolor = "#ccc">
        <div align = "center">
            <h1>xml和json数据格式生成</h1>
            <hr color ="blue">
            <a href = "#">linux vim 命令操作收集</a> || 
            <a href = "http://182.92.164.167:8090/basicTest/">php练习</a>
         <div>
        <div width =600px cellspacing = "0" cellpadding = "0">
            <h3>以下实现简单xml生成</h3>
            <pre>
            <?php
                $arr = array("id"=>1,"name"=>'abc','phone'=>'123456','scend'=>array(1=>01,"abc"=>02,'name'=>'longjianweii'));
                Cxmlandjson::xmlEncode(200,"加载数据成功",$arr);
            ?>
            </pre>
            <p>因xml文件不能包括其他文件只实现上述点击查看源码才能看到结构</p><a href="http://182.92.164.167:8090/vLive/index.php">个人实现界面</a>||
            <a href = "http://182.92.164.167:8090/basicTest/Cxmlandjson.php">查看单独实现xml效果
            </a>||<a href="http://182.92.164.167:8090/basicTest/sanweiarrayForech.php">三维数组遍历             </a>|| <a href="http://182.92.164.167:8090/basicTest/ForeachDir.php">查看实现文件遍历</a> || <a href = "http://182.92.164.167:8090/basicTest/view_class.php">面向对象实现基本图形计算</a>   
        </div>

        <div width =600px cellspacing = "0" cellpadding = "0">
            <h3>以下实现简单json生成</h3>
            <?php 
                $arr = array("id"=>1,"name"=>'abc','phone'=>'123456');
                Cxmlandjson::json(100,"secces",$arr);
            ?>
        </div> 
    </body>
</html>
