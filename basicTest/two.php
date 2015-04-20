<html>
    <head>
        <style>
            body{
                margin:10px;
                background:#ccc;
            }
        </style>
            <body>
                <script> 
                    alert("客户端时间"+(new Date()));
                </script>
                <?php
                    echo "服务器的时间".date("Y-m-d H:i:s")."<br>";
                ?>
            </body>
        
    </head>
</html>
