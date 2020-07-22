<!DOCTYPE html>
<html>
    <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter a string.<br>
        <input type="text" name="name"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $input = $_REQUEST['name'];
            if(strlen($input)<3){
                echo $input.$input.$input;
            }
            else{
                $f3char = substr($input, 0, 3);
                $new = $f3char.$input.$f3char;
                echo $new;
            }   
        }
    ?>
    </body>
</html>