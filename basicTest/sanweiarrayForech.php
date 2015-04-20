<?php
    $wage = array("市场部"=> array(
                                    array(1,"zhangsan","市场部经理",5000.00),
                                    array(2,"lisi","职员",5000.00),
                                    array(3,"wanwu","职员",3000.00)
                                  ),
                  "产品部"=> array(
                                    array(1,"zhangsan","产品部经理",15000.00),
                                    array(2,"lisi","职员",5000.00),
                                    array(3,"wanwu","职员",3000.00)
                                   ),           
                  "财务部"=> array(
                                    array(1,"zhangsan","财务部经理",15000.00),
                                    array(2,"lisi","职员",5000.00),
                                    array(3,"wanwu","职员",3000.00)                                
                                  )
                 );
    foreach($wage as $sector =>$table){
        echo '<table border="1" width = "600px" align = "center">';
        echo '<caption><h2>'.$sector.'工资表</h2></caption>';
        echo '<tr bgcolor = "red">';
        echo '<th>编号</th><th>姓名</th><th>职位</th><th>工资</th>';  // 表头
        echo '</tr>';
        foreach($table as $row){
            echo '<tr>';
            foreach($row as $col){
                echo'<td>'.$col.'</td>';
            }
            echo '</tr>';
        }
    echo '</table><br>';
    }
    echo "<br>--------------------使用list()和each()遍历数组-------------<br>";
    $abcde = array("id"=>1,"name"=>"zhangsan","company"=>"a company","adres"=>"beijing");
   while( list($key,$value) = each($abcde)){
        echo "$key => $value<br>";
    }
    
    foreach($_SERVER as $key=>$value){
        echo'$_SERVER['.$key.']='.$value.'<br>'; // 服务器数组信息
    }
    foreach($_ENV as $key=>$value){
        echo'$_ENV['.$key.']='.$value.'<br>'; // 环境变量数组信息
    }

?>
