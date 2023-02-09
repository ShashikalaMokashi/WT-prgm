<!DOCTYPE html>
<html lang="en">
    <head>
        <title>prg 16</title>

    </head>
    <body>
        <center>
            <form action="" method="POST" enctype="multipart/form-data">
                Select an image: <input type="file" name="file"/>
                <input type="submit" value="Upload" name="Submit1"/>


            </form>
        </center>

        <?php
        if(isset($_POST['Submit1']))
        {
            $filepath = "images/" .$_FILES["file"]["name"];
            if(move_uploaded_file($_FILES["file"]["tmp_name"],$filepath))
            {
                echo "<center><img src=".$filepath." height=500 width=700 /></center>";
            }
            else
            {
                echo "Error!!";
            }
        }
          

        ?>
    </body>
</html>
