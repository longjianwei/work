<?php
   $i=1;
    while($i<10){
        $j=1;
        echo "<br>";
        while($j<=$i){
            echo "$i x $j = ".$i*$j."&nbsp;&nbsp;";
            $j++;
        }
        $i++;
        echo "<br>";
    }
    for($a=1;$a<10;$a++){
        for($b=1;$b<=$a;$b++){
            echo "$a x $b = ".$a*$b."&nbsp;&nbsp;";
        }
        echo "<br>";
    }
    
?>
