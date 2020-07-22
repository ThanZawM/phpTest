<!DOCTYPE html>
<html>
    <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter a string.<br>
        <input type="text" name="str"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $input = $_REQUEST['str'];
            $lastchar = $input[strlen($input)-1];
            echo "User inpupt string is \"$input\".";
            echo "<br>";
            echo "Last character is $lastchar.";
            echo "<br>";
            $new = $lastchar.$input.$lastchar;
            echo $new;
        }
    ?>
    </body>
</html>