<?php
    function addNumbers (float $a, float $b) : int {
        return $a + $b;
    }
    echo addNumbers(1.5,5.5);
    //function
    echo "<br>";
    function faminfo($fname, $fyear){
        echo "$fname, $fyear";
        echo "<br>";
    }
    faminfo("Htet", 1998);
    faminfo("Zaw", 1997);
    faminfo("Phyo", 1994);

    echo "<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);
    echo "<br>";
    $arraylength = count($cars);
    for($x=0; $x<$arraylength; $x++){
        echo $cars[$x];
        echo "<br>";
    }

    
?>