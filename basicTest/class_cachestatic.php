<?php
    class File{
        private $_dir;
        
        const EXT='.txt';      // 定义一个后缀名

        public function __construct(){
            $this->_dir = dirname(__FILE__).'/files/';
        }
        public function cacheData($key,$value='',$path='')
        {
            $filename=$this->_dir.$path.$key.self::EXT;
            if($value!==''){    // 将value值写入缓存
                $dir=dirname($filename);
                if(!is_dir($dir)){
                    mkdir($dir,0777);
                }
             return  file_put_contents($filename,json_encode($value)); // 将数据转换成json存入$filename中
            }
        }
    
    }
   // echo dirname(__FILE__); // 获取当前文件目录
    $data=array('id'=>1,'name'=>'longjianwei','type'=>array(1,2,'abc' => array(1,2,'hello')));
    $file=new File();
   if($file->cacheData('index_cache',$data)){
        echo "success";        
    }
    else{
        echo "fail";
    }
?>
