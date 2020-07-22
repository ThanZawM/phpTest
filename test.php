<?php
    echo "Hello World!<br>";
    
        $num1=50;
        $num2=60;
        $result=$num1+$num2;
        echo "The result is $result.";
        echo "<br>";
        var_dump(is_int($num1));
        echo "<br>";
        $y = 1.9e411;
        var_dump($y);
        echo "<br>";
        var_dump(is_numeric($y));
        echo "<br>";
        $s = "New String";
        echo strlen($s);
        echo "<br>";
        echo str_word_count($s);
        echo "<br>";
        echo strrev($s);
        echo "<br>";
        echo strpos($s, "String");
        echo "<br>";
        var_dump($s);

    function myTest1() {
        static $x = 0;
        echo $x;
        $x++;
      }
      echo "<br>";
      myTest1();
      echo "<br>";
      myTest1();
      echo "<br>";
      myTest1();

      $players = array("Messi", "Ronaldo", "Neymar","DeBruyne");
      echo "<br>";
      print_r($players);
      echo "<br>";
      var_dump($players);

      $x=null;
      echo "<br>";
      var_dump($x);

      echo "<br>";
      echo pi();

      $num = 50.59;
      echo "<br>";
      echo round($num);

      echo "<br>";
      echo rand(1,100);

      echo "<br>";
      // case-sensitive default => false
      define ("greeting", "welcome to my home",TRUE);
      function myt(){
          echo greeting;
      }
      myt();
      echo "<br>";
      echo GREETING;
      echo "<br>";

      echo 2**5;

      echo "<br>";
      echo $status = (empty($user))? "anonymous" : "logged in";
      echo "<br>";
      $user = "John Doe";
      echo $status = (empty($user))? "anonymous" : "logged in";
      echo "<br>";
      echo $status;

      echo "<br>";
      echo $color = $color ?? "red";
      echo "<br>";

      $t = date("H");
      echo $t;
      echo "<br>";
      var_dump($t);
      echo "<br>";
      if ($t < "10"){
          echo "Have a good morning.";
      }
      elseif ($t < "20") {
          echo "Have a good day.";
      }
      else {
        echo "Have a good night.";
      }

      echo "<br>";
      $favcolor = "green";
      switch($favcolor) {
        case "red":
            echo "This is red.";
            break;
        case "blue":
            echo "This is blue.";
            break;  
        case "green":
            echo "This is green.";
            break;
        default:
            echo "This is neither red, green, nor blue.";
      }
      echo "<br>";

      //while loop
      $x = 1;
      while($x<13){
        echo "3 * $x = ";
        echo 3*$x;
        echo "<br>";
        $x++;
      }
      echo "<br>";

      //do while loop, at least once
      $x = 6;
      do{
        echo "The number is $x. <br>";
        $x++;
      }while($x<6);

      echo "<br>";
      //for loop
      for ($x=0; $x<101; $x+=10){
        if($x == 60){
            continue;
        }
        echo "The number is $x. <br>";
      }

      echo "<br>";
      //for each
      foreach($players as $val){
          echo $val;
          echo "<br>";
      }
      echo "<br>";
      $age = array("Peter"=>35, "John"=>53, "Ben"=>75);
      foreach($age as $x => $val){
          echo "$x = $val";
          echo "<br>";
      }

      // break, continue in while loop
      echo "<br>";
      $x = 0;
      while($x < 11){
          if($x == 4){
            continue;
          }
          echo "$x <br>";
          $x++;
      }
        
?>