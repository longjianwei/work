<?php
    class Cxmlandjson{
        /* 实现输出json 函数使用 json_encode($vlue)
        *  $code 代表接口中返回状态码  $message 代表提示信息 $data 代表数据 
        *  返回至 string
        */
        public static function json($code,$message = '',$data = array()){
            if(!is_numeric($code)){    // 判断$code是否为数字
                return '';
            }
            $result = array(      // 将取得的变量赋值到$result 结果集
                'code' => $code,
                'message' => $message,
                'data' => $data
            );
            echo json_encode($result);
        
        }
        public  static function xmlEncode($code, $message ='', $data = array()){
            if(!is_numeric($code)){
                return '';
            }
            $result = array(
                'code'=> $code,
                'message'=> $message,
                'data' => $data
            );
           //  header("content-type:text/xml");
            $xml = "<?xml version = '1.0' encoding = 'utf-8'?>";
            $xml.="<root>\n";
                echo Cxmlandjson::freachData($result);
            $xml.="</root>";
            echo $xml;
         
        } 

        public static function freachData($data){
            $xml ='';
            foreach($data as $key => $value){
                $xml.="<{$key}>";
                $xml.=(is_array($value))?self::freachData($value):$value;
                $xml.="</{$key}>\n";
            }
            return $xml;
        }  

    }


?>
