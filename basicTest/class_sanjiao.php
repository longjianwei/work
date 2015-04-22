<?php
    class sanjiao implements shape {             // 定义一个实现了shape接口中德 三角形子类
        private $side1;
        private $side2;
        private $side3;
        
        function __construct($shuju){          // 将From表单中德数据 构造函数初始化
            $this->side1 = $shuju["side1"];
            $this->side2 = $shuju["side2"];
            $this->side3 = $shuju["side3"];
        }
        function area(){                     // 实现接口中德抽象方法area（）计算面积
             $q = ($this->side1 + $this->side2 + $this->side3)/2;
             return sqrt($q*($q - $this->side1)*($q - $this->side2)*($q - $this->side3));
        }
        function perimeter(){
            return $this->side1 + $this->side2 + $this->side3;
        }
    }
?>
