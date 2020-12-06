<?php
    // create short variable name
    $tireqty = (int) $_POST['tireqty']; //传递用户输入值到变量
    $oilqty = (int) $_POST['oilqty'];
    $sparkqty = (int) $_POST['sparkqty'];
    $find = $_POST['find'];
    $ShipAddrqty =  preg_replace('/\x09|\x0D/','\x20',$_POST['ShipAddrqty']);
    $document_root=$_SERVER['DOCUMENT_ROOT'];
    $date = date('H:i, jS Y');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>屠夫网</title>
  </head>
  <body>
    <h1>握着玫瑰的屠夫-后台处理</h1>
    <h2>绝的一把菜刀</h2>
    <?php //标记php开始
        $totalqty = 0;
        $totalamount = 0.00;
        define ('TIREPRICE', 100);
        define ('OILPRICE', 10);
        define ('SPARKPRICE', 1);
        $totalamount = $tireqty * TIREPRICE
            + $oilqty * OILPRICE
            + $sparkqty * SPARKPRICE;
        $totalqty = $tireqty + $oilqty + $sparkqty;
        echo "测试时间".date('H:i, jS Y')."<br />";
        if ($find == 'a') {
            $findstr = "我是常客";
        } else if ($find == 'b') {
            $findstr = "电视广告";
        } else if ($find == 'c') {
            $findstr = "手机广告";
        } else if ($find == 'd') {
            $findstr = "朋友介绍";
        } else {
            $findstr = "以上都不是";
        }
        if ($totalqty > 0) {
            echo "总共金额: ￥".number_format($totalamount, 2)."<br />";
        } else {
            echo "总共金额: ￥".number_format($totalqty, 0)."<br />";
        }
        echo htmlspecialchars($tireqty).' Tires数额<br />'; //跟随输出
        echo htmlspecialchars($oilqty).' Oilqty数额<br />';
        echo htmlspecialchars($sparkqty).' SparkPlugs数额<br />';
        echo "ShipAddr地址：".$ShipAddrqty."<br />";
        echo "客户来源: ".$findstr.".<br />";

        $outputstring = $date."\x09".$tireqty."\x09".$oilqty."\x09".$sparkqty."\x09￥:"
            .number_format($totalamount,2)."\x09地址:".$ShipAddrqty."\x09客户来源: ".$findstr."\x0A";
        echo $outputstring;
        @$fp = fopen("$document_root/phpWeb/orders_log.txt", 'ab');
        if (!$fp) {
            echo "<p><strong>无法打开写入文档，请稍后尝试。</strong></p>";
            exit;
        }
        flock($fp, LOCK_EX);
        fwrite($fp, $outputstring, strlen($outputstring));
        flock($fp, LOCK_UN);
        fclose($fp);
        echo "<p>成功写入</p>";

    ?>
  </body>
</html>


