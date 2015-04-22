<?php
    class circle implements shape{
        private $radius;
        function __construct($shuju=""){
            $this->radius = $shuju["radius"];
        }
        function area(){
            return pi()*$this->radius*$this->radius;
        }
        function perimeter(){
            return 2*pi()*$this->radius;
        }
    }
?>
