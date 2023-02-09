<!DOCTYPE html>
<html lang="en">
    <head>
        <title>prgm 19</title>

    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form">
            <h2>wkjjsnsck</h2>
            Enter a frist no: <input type="text" name="a"/>
            Enter a second no: <input type="text" name="b"/>

            <input type="radio" name="arthimetic" value="add"/>Addition
            <input type="radio" name="arthimetic" value="sub"/>Substraction
            <input type="radio" name="arthimetic" value="mult"/>Multiplication
            <input type="radio" name="arthimetic" value="div"/>Division<br><br>
            <input type="submit1" name="submit1" value="Submit"/><br><br><br>

        </form>
        <?php
        if(isset($_POST["Submit1"]))
        {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $arthimetic = $_POST["arthimetic"];


            switch($arthimetic)
            {
                case 'add': echo "Addition of two number is:" . ($a + $b);
                break;
                case 'sub': echo "substrtion of two number is:" . ($a - $b);
                break;
                case 'mult': echo "multiplication of two number is:" . ($a * $b);
                break;
                case 'div': echo "division of two number is:" . ($a / $b);
                break;
            }

        }
        ?>
    </body>

</html>