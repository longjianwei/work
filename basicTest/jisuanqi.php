<html>
<head>
    <title>简单的计算器</title>
</head>
<body>
    <table border = "1" align = "center" width = "500px">
        <form action = "" method = "post">
        <caption><h2>计算器</h2></caption>
        <tr>
            <td><input type = "text" size = "15" name = "num1" value = "<?php if(!empty($num1)) echo "$num1"?>"></td>
            <td><select name = "oper">
                <option value = "+"<?php if($_POST["oper"] == "+") echo "selected"?>>+</option>
                <option value = "-"<?php if($_POST["oper"] == "-") echo "selected"?>>-</option>
                <option value = "x"<?php if($_POST["oper"] == "x") echo "selected"?>>x</option>
                <option value = "/"<?php if($_POST["oper"] == "/") echo "selected"?>>/</option>
                <option value = "%"<?php if($_POST["oper"] == "%") echo "selected"?>>%</option>
                </select>
            </td>
            <td><input type = "text" size = "15" name = "num2" value = "<?php if(!empty($num2)) echo "$num2"?>"></td>
            <td><input type = "submit" name = "sub" value = "计算"></td>
        </tr>
        <?php 
        
          
            if(isset($_POST["sub"])&&!empty($_POST["sub"])) {
                $sum = 0;
                if($_POST["oper"]=="+"){
                        $sum = $_POST["num1"] + $_POST["num2"];
                        echo "计算结果为：$sum";
                }
            }
            
        ?>
        </form>
    </table>
</body>
</html>
