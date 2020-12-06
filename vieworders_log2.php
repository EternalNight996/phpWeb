<?php
    //创建变量
    $document_root = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>屠夫网</title>
        <style type="text/css">
        table, th, td {
            border-collapse: collapse;
            border: 2px solid black;
            padding: 6px;
        }
        th {
            background: #ccccff;
        }
        </style>
    </head>
    <body>
        <h1>握着玫瑰的屠夫-orders历史记录查看</h1>
        <?php
        //查看entire里文件,每一个order成element进数组
        $orders = file("$document_root/phpWeb/orders_log.txt");
        //计算文件内行数
        $number_of_orders = count($orders);
        if ($number_of_orders == 0) {
            echo "<p><strong>没有orders_log内容,请稍后尝试</strong></p>";
        }
        echo "<table>\x0A";
        echo "<tr>
                <th>Order Date数据</th>
                <th>Tires数额</th>
                <th>Oil数额</th>
                <th>Spark Plugs数额</th>
                <th>Total合计</th>
                <th>ShipAddr地址</th>
                <th>来源</th>
            </tr>";
        for ($i=0; $i<$number_of_orders; $i++) {
            //输出到网页
            $line = explode("\x09", $orders[$i]);
            //只保留订购数量
            $line[1] = intval ($line[1]);
            $line[2] = intval ($line[2]);
            $line[3] = intval ($line[3]);
            //输出没一个order
            echo "<tr>
                    <td>".$line[0]."</td>
                    <td style=\"text-align: right;\">".$line[1]."</td>
                    <td style=\"text-align: right;\">".$line[2]."</td>
                    <td style=\"text-align: right;\">".$line[3]."</td>
                    <td style=\"text-align: right;\">".$line[4]."</td>
                    <td style=\"text-align: right;\">".$line[5]."</td>
                    <td>".$line[6]."</td>
                </tr>";
        }
        echo "</table>\x0A";
        $array = array(4,5,1,2,3);
        $ac = array_count_values($array);
        ?>
    </body>
</html>
