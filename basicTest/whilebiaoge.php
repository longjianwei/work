<html>
    <head><title>使用while循环输出表格</title></head>
    <body>
    <table align = "center" border = "1" width = "600px">
    <?php
        $out = 0;
        while($out<15){
            if($out % 2 == 0){
                $bgcolor = "#fff";
            }else{
                $bgcolor = "#ddd";
            }
            echo "<tr bgcolor =".$bgcolor.">";
        $in = 0;
        while($in<15){
            echo "<td>".($out*15+$in)."</td>";
            $in++;
            }
            echo "</tr>";
            $out++;
        }
    ?>
    </table>
    </body>
</html>
