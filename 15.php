<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prgm 15</title>
</head>
<body>
    <center>
        <h1> program on create chessboard</h1>
        <h1> chessboard</h1>
        <table border height="400" width="400">
            <?php
            for($row=1; $row<=8; $row++)
            {
                echo "<tr>";
                for($col=1; $col<=8; $col++)
                {
                    $total = $row + $col;
                    if(($total % 2)==0)
                    {
                        echo "<td height='30' width='30' bgcolor='lightgreen'></td>";

                    }
                    else{
                        echo "<td height='30' width='30' bgcolor='gray'></td>";
                    }
                }
                echo "</tr>";

            }
            ?>
        </table>
    </center>
    
</body>
</html>