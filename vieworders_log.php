<?php
    //创建变量
    $document_root = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>屠夫网</title>
    </head>
    <body>
        <h1>握着玫瑰的屠夫-orders历史记录查看</h1>
        <?php
        $orders = file("$document_root/phpWeb/orders_log.txt");
        $number_of_orders = count($orders);
        if ($number_of_orders == 0) {
            echo "<p><strong>没有orders_log内容,请稍后尝试</strong></p>";
        }
        for ($i=0; $i<$number_of_orders; $i++) {
            echo $orders[$i]."<br />";
        }
        ?>
    </body>
</html>
