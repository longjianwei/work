<?php
    function foreachDir($dirname){
        $num = 0;
        $dir_handle = opendir($dirname);    //  opendir 打开目录获得一个资源句柄
        
       // echo '<caption><h1>目录'.$dirname.'下的内容</h1></caption>';
        echo '<table border = "1" align = "center" width = "800" cellspacing = "0" cellpadding = "1">';
        echo '<caption><h1>目录'.$dirname.'下的内容</h1></caption>';
        echo '<tr align = "center" bgcolor = "#ccc">';
        echo '<th>文件名</th><th>文件大小</th><th>文件类型</th><th>修改时间</th></tr>';
        while($file = readdir($dir_handle)){      // 使用readdir循环读取目录里的内容
            $dirfile = $dirname."/".$file;          // 将目录名下的文件和当前目录用连接起来
            if($num++%2==0){
                $bgcolor = '#fff';
            }else{
                $bgcolor = '#ccc';
            }
            echo '<tr bgcolor ='.$bgcolor.'>';
            echo '<td>'.$file.'</td>';
            echo '<td>'.filesize($dirfile).'</td>';
            echo '<td>'.filetype($dirfile).'</td>';
            echo '<td>'.date("Y-n-t",filemtime($dirfile)).'</td>';
            echo '</tr>';
        }   
        echo '</table>';
        closedir($dir_handle);
        echo '<br>';
        echo '在<b>'.$dirname.'</b>下文件有<b>'.$num.'</b>个';
        echo '<br>';
    }
    function dirSize($directory){                    // 自定义一个统计文件大小函数
        $dir_size = 0;
        if($dir_handle = @opendir($directory)){     // 打开目录，并判断是否能打开        
            while($filename = readdir($dir_handle)){         // 循环遍历目录下文件
                if($filename != "."&&$filename != ".."){     // 一定要排除两个特殊目录
                    $subfile = $directory."/".$filename;     // 将子目录的子文件与当前目录相连
                    if(is_dir($subfile))                     // 如果是目录
                        $dir_size += dirSize($subfile);      // 递归的调用自身函数，再进行上式目录计算****** 
                    if(is_file($subfile))
                        $dir_size += filesize($subfile);
                }
            }
            closedir($dir_handle);
           // return  $dir_size;
            echo round($dir_size/pow(1024,1),2)." KB";
        }
            
    }
    foreachDir('testForeach');             // 实例化遍历目录文件
    dirSize('testForeach');                // 实例化统计目录大小
?>

