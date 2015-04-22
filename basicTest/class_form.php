<?php
    class form{

        private $formName;  // 接收到的表单名称
        private $request;   // 数组 包含用户提交所有数据
        private $action;    // 表单提交url 
        private $method;    // 表单的提交方法
        private $target;    // 显示目标业面  target = _self为显示当前页

        function __construct($formName,$request,$action="view_class.php",$method = "get", $target = "_self"){
            $this->formName = $formName;
            $this->request = $request;
            $this->action = $action;
            $this->method = $method;
            $this->target = $target;
        }
        function __toString(){                //创建对象引用时直接调用该方法 实现html表单
            $str = '<table align = "center" border = "1" width ="600">';            
            $str.= '<caption><h3>'.$this->formName.'</h3></caption>';
            $str.= '<form action ='.$this->action.' method='.$this->method.' target='.$this->target.'>';
            
            switch($this->request["action"]){
                case 1:
                    $str.='<tr><th>矩形的高度：</th><td>';
                    $str.='<input type ="text" name ="height" value ='.$this->request["height"].'>';
                    $str.='</td></tr>';
                    $str.='<tr><th>矩形的宽度：</th><td>';
                    $str.='<input type ="text" name ="width" value ='.$this->request["width"].'>';
                    $str.='</td></tr>';
                    break;  
                case 2:
                    $str.='<tr><th>三角形的第一条边：</th><td>';
                    $str.='<input type ="text" name ="side1" value ='.$this->request["side1"].'>';
                    $str.='</td></tr>';
                    $str.='<tr><th>三角形的第二条边：</th><td>';
                    $str.='<input type ="text" name ="side2" value ='.$this->request["side2"].'>';
                    $str.='</td></tr>';
                    $str.='<tr><th>三角形的第三条边：</th><td>';
                    $str.='<input type ="text" name ="side3" value ='.$this->request["side3"].'>';
                    $str.='</td></tr>';
                    break;
                case 3:
                    $str.='<tr><th>圆的半径：</th><td>';
                    $str.='<input type ="text" name ="radius" value ='.$this->request["radius"].' >';
                    $str.='</td></tr>';
                    break;
            }
            $str.='<tr><td align = "center" colspan = "2"><input type = "submit" value = "计算"></td></tr>';
            $str.='<input type = "hidden" name = "act" value='.$this->request["action"].'>';    //隐藏表单
            $str.='<input type = "hidden" name = "action" value='.$this->request["action"].'>';    //隐藏表单
            $str.='</form>';
            $str.='</table>';
            
            return $str;
        }
    }
?>
