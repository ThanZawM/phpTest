<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Enter a string.<br>
            <input type="text" name="name"><br>
            <input type="submit" value="Submit" name="submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $input = $_REQUEST['name'];
                $lindex = strlen($input)-1;
                $fchar = $input[0];
                $lchar = $input[$lindex];
                $new = substr_replace($input, $fchar, $lindex, 1);
                $new = substr_replace($new, $lchar, 0, 1);
                echo $new;
            }
        ?>
    </body>
</html>