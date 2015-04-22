<html>
    <head>
    <title>添加联系人</title>
    </head>
    <body>
    <?php 
        echo "<h1>add message to post_add.php<h2><br>";
    ?>
    <table align = "center" bgcolor ="#9999" width ="500" border = "1">     
    <form action = "post_add.php" method = "post">
<div>
    <tr><td> 编号：</td><td><input type = "text" name = "id" size="auto"></td></tr>
    <tr><td> 姓名：</td><td><input type = "text" name = "name"></td></tr>
    <tr><td> 公司：</td><td><input type = "text" name = "company"></td></tr>
    <tr><td> 地址：</td><td><input type = "text" name = "adres"></td></tr><br>
    <tr><td> 电话：</td><td><input type = "text" name = "phone"></td></tr><br>
    <tr><td>  EMAIL：</td><td><input type= "text" neme = "email"></td></tr><br>
    <tr><td><input type = "submit" value = "添加联系人"></td></tr>
</div>
     </form>
    </table>
    </body>
</html>
