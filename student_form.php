<!DOCTYPE HTML>  
<html>
    <head>
    </head>
    <body>  

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $gender = $_REQUEST['gender'];
            $township = $_REQUEST['township'];
            $subject = $_REQUEST['subject'];

            echo "<h2>Your Input</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $phone;
            echo "<br>";
            echo $gender;
            echo "<br>";
            echo $township;
            echo "<br>";
            foreach($subject as $x){
                echo $x;
                echo "\t";
            }
            
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name"> 
        <br><br>
        E-mail: <input type="email" name="email">
        <br><br>
        Phone: <input type="number" name="phone">
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <br><br>
        Township:
        <select name="township">
            <option>Twn1</option>
            <option>Twn2</option>
            <option>Twn3</option>
        </select>
        <br><br>
        Subject:
        <input type="checkbox" name="subject[]" value="Sub1">Sub1
        <input type="checkbox" name="subject[]" value="Sub2">Sub2
        <input type="checkbox" name="subject[]" value="Sub3">Sub3
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>

    </body>
</html>