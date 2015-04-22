<head>
    <title>图形的周长和面积计算</title>
</head>
<body>
    <?php
        function __autoload($classname){              // 用到某类时 才加载本函数方法
            include("class_".($classname).".php");
        }
    ?>
    <center>
        <h1>图形周长和面积计算(通过class shape接口类->1.class rect 2.class sanjiao 3.class circle->继承shape接口->子类实例化->形成了接口中同方法不同结果的多态！</h1>
        <hr width = "500" >
        <br>
        <a href = "view_class.php?action=1">矩形</a>||
        <a href = "view_class.php?action=2">三角形</a>||
        <a href = "view_class.php?action=3">圆形</a>
        <hr>
    </center>
    <?php
        switch($_REQUEST["action"]){
            case 1:
                $form = new form("矩形计算",$_REQUEST,"view_class.php");
                echo $form;         // 自动调用 类中方法 __tostring()
                break;
            case 2:
               $form = new form("三角形计算",$_REQUEST,"view_class.php","","_blank");
                echo $form;
                break;
            case 3:
                $form = new form("圆形计算",$_REQUEST,"view_class.php");
                echo $form;
                break;
            default:
                echo "请选择一个形状";
        }
        if(isset($_REQUEST["act"])){
            switch($_REQUEST["act"]){
                case 1:
                    $shape = new rect($_REQUEST);
                    break;
                case 2:
                    $shape = new sanjiao($_REQUEST);
                    break;
                case 3:
                    $shape = new circle($_REQUEST);
                    break;
            }
            echo "面积为：".$shape->area()."<br>";
            echo "周长为：".$shape->perimeter()."<br>";
        }
    ?> 
</body>
