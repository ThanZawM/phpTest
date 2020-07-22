<!DOCTYPE HTML>
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
            $fchar = strtoupper($input[0]);
            $new = substr_replace($input, $fchar, 0, 1);
            echo $new; 
        }
    ?>
    </body>
</html>