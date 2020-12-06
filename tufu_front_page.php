<?php
    $pictures = array('brakes500x250.png', 'headlight500x250.png','spark_plug500x250.png',
        'steering_wheel500x250.png', 'tire500x250.png', 'wiper_blade500x250.png');
    shuffle($pictures);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>屠夫网</title>
    </head>
    <body>
        <h1>握着玫瑰的屠夫-图片随机切换</h1>
        <div align="center">
        <table style="width: 100%; border: 0">
            <tr>
            <?php
            for ($i=0; $i<6; $i++) {
                echo "<td style=\"width: 33%; text-align: center\">
                    <img src=\"pictures\\".$pictures[$i]."\"/></td>";
                if (($i+1)%3 == 0) {
                    echo "<table style=\"width: 100%; border: 0\">.\x0A";
                }
            }
            ?>
            </tr>
        </table>
        </div>
    </body>
</html>
