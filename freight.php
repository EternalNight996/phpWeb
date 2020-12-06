<!DOCTYPE html>
<html>
  <head>
    <title>Bob's auto Parts - Freight Costs</title>
  </head>
  <body>
    <table style="border: 0px; padding: 3px">
    <tr>
      <td style="background: #FF0000; text-align: center;">Distance</td>
      <td style="background: #0000FF; text-align: center;">Cost</td>
    </tr>
    <?php
    for ($distance=50; $distance<=300; $distance+=50) {
        $temp="n$distance";
        $temp2="n".($distance/10);
        echo "<tr>
            <td style=\"text-align: right;\">".$temp."</td>
            <td style=\"text-align: right;\">".$temp2."</td>
            </tr>\x0A";}
        exit;
    ?>
    </table>
  </body>
</html>
