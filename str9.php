<?php
    $num = array(10, 6, 5, 4, 2, 8, 15, 50, 45, 70, 17, 35);
    sort($num);
    echo "<h5>Sorting Array</h5>";
    foreach($num as $val){
        echo $val."\t";
    }
    echo "<br>";
    echo "<br>";
    echo "Largest number = ".$num[count($num)-1];
    echo "<br>";
    echo "Second largest numer = ".$num[count($num)-2];
    echo "<br>";
    echo "Smallest number = ".$num[0];
    echo "<br>";
    echo "Second smallest nuber = ".$num[1];    
?>