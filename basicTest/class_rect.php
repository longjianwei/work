<?php
   // include("class_shape.php");
    class rect implements shape{               //此子类实现接口中抽象方法 矩形类
       
        private $width;
        private $height;
       
        function __construct($shuju=array("width"=>0,"height"=>0)){  // 作用使用 From表单传入数组类型 高度和宽度
            $this->width = $shuju["width"];
            $this->height = $shuju["height"];
        } 
        function area(){
            return $this->width*$this->height;
        }
        function perimeter(){
            return 2*$this->width + $this->height;
        }
    }
   // $arr = array('width'=>1,'height'=>2);
   // $a = new rect($arr);
   // var_dump($a->area());
   // echo $a->area();

?>
