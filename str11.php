<?php
    $z = 0;
    for($x=1; $x<=5; $x++){
        for($y=1; $y<=$x; $y++){
            $z++;
            echo $z;
            echo "\t";
        } 
        echo "<br>";
    }
?>