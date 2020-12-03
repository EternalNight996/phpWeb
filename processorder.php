<!DOCTYPE html> //定义标记类型
<html>
  <head>
    <title>测试标题</title>
  </head>
  <body>
    <h1>测试自动部分</h1>
    <h2>测试执行部分</h2>
  </body>
</html>

<?php //标记php开始
    // create short variable name
    $tireqty = $_POST['tireqty']; //传递用户输入值到变量
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    echo "<p>测试时间".date('H:i, jS Y')."</p>";
    echo htmlspecialchars($tireqty).' tires<br />'; //跟随输出
    echo htmlspecialchars($oilqty).' oilqty<br />';
    echo htmlspecialchars($sparkqty).' spark plugs<br />';
    define ('TEST', 100); //定义关键词
    define ('CHAR', 'testchar');
    echo 'test='.TEST.'<br />';
?>

