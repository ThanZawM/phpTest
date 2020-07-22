<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Enter a string.<br>
            <input type="text" name="name"><br>
            Enter a character position to be deleted.<br>
            <input type="number" name="pos"><br>
            <input type="submit" value="Submit" name="submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $input = $_REQUEST['name'];
                $pos = $_REQUEST['pos'];
                $new = substr_replace($input, "", $pos, 1);
                echo $new;
            }
        ?>
    </body>
</html>