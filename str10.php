<?php
    echo "<h4>Numbers without divided by 3 from 1 to 100 using continue</h4>";
    echo "<br>";
    $x=1;
    while($x<=100){
        if($x%3==0){
            $x++;
            continue;
        }
        echo $x."\t";
        $x++; 
    }
?>