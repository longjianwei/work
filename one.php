<html>
<head>
    <meta http-equiv = "content-type"; content = "text/html"; charst = "utf8">
    <title>获取服务器信息的第一个程序</title>
</head>
<body>
<?php
    $sysos = $_SERVER["SERVER_SOFTWARE"];              // 获取服务器标识的字符串
    $sysversion = PHP_VERSION;                         // 获取php服务器版本号
    
    //$sql = mysql_connect("localhost","root","root");
    //$mysqlinfo = mysql_get_server_info();
    
    if(function_exists("gd_info")){
        $gd = gd_info();
        $gdinfo = $gd['GD Verion'];
    }else{
        $gdinfo = "未知";
    }
    
    $freetype = $gd{"freetype support"}?"支持":"不支持";
    $allowurl = ini_get("allow_url_fopen")?"yes":"no";
    $max_upload = ini_get("file_uploads")?ini_get("upload_max_filesize"):"disabled";
    $max_ex_time = ini_get("max_execution_time")."s" ;
    
    date_default_timezone_set("Etc/GMT-8");
    $systemtime = date("Y-m-d H:i:s",time());

    echo "<table align = center cellspacing = 0 cellspacing = 0>";
    echo "<caption><h2>系统信息</h2> </caption>";

 ?>
</body>
</html>
