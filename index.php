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
                $arr = array("id"=>1,"name"=>'abc','phone'=>'123456');
                Cxmlandjson::xmlEncode(200,"加载数据成功",$arr);
            ?>
            </pre>    
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
