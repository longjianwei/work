<html>
    <head>
        <style>
            body{
                margin:0px;
                background:#ccc;
            }
            <body>
                <script> 
                    alert("客户端时间"+(new Date()));
                </script>
                <?php
                    echo "服务器的时间".date("Y-m-d H:i:s")."<br>";

                    
                ?>
            </body>
        </style>
    </head>
</html>
