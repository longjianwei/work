<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="styles/index.css">
<link rel="stylesheet" type="text/css" href="styles/management.css">
<title>内部管理系统</title>
</head>
<body>
<?php include 'header.php'?>
<table id="biao">
     <tr>
    <th>编号/日期</th>
   <?php
   $i=1;
   while($i<32) 
   {
   	echo "<th>$i</th>";
	$i++;
   }
   ?>
   <th>合计</th>
  </tr>
  <tr>
    <td>January</td>
      <?php
   $j=1;
   while($j<32) 
   {
   	echo "<th>&nbsp;	&nbsp;</th>";
	$j++;
   }
   ?>
  </tr>

</table>



</body>
</html>
