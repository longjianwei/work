<?php
    echo phpinfo();
    $link = mysql_connect("localhost","root","root")or die("连接数据库失败:".mysql_error());
    echo "与mysql服务器建立连接成功!<br>";
    // mysql_select_db('longjianwei')or die('不能选定数据库longjianwei：'.mysql_error());

    
?>
