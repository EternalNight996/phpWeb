<?php
    //创建变量
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $feedback=trim($_POST['feedback']);
    //设置静态信息
    $toaddress="EternalNightYeah@Yeah.net"; //收到邮件地址
    $subject="客户反馈来自屠夫网";
    $mailcontent="Customer name: ".str_replace("\r\n", "", $name)."\n".
            "Customer email: ".str_replace("\r\n", "", $email)."\n".
            "Customer comments:\n".str_replace("\r\n", "", $feedback)."\n";
    $fromaddress="from: Mr.屠夫@qq.com";
    //引用email()函数发送邮件,linux要安装snedmail到/sbin, sudo apt install sendmail
    //sudo apt-get install sendmail-cf;  systemctl restart sendmail;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>屠夫网-反馈提交</title>
    </head>
    <body>
        <h1>握着玫瑰的屠夫-反馈后台</h1>
        <?php
        if (strlen($email)>6 && $name!="" && $feedback!="") {
            mail($toaddress, $subject, $mailcontent, $fromaddress);
            echo "<p>已经成功发送邮件</p>";
            $printto=nl2br(htmlspecialchars($name."<".$email.">".$feedback));
            echo "<p>$printto</p>";
        } else {
            echo "<h2 style=\"background: #F101F0; /\">发送失败。<h2>";
        }
        if ($name == "") {
            echo "请填写名称。";
        }
        if (strlen($email) <= 6) {
            echo $email."长度小于6，请重新输入。";
        }
        if ($feedback == "") {
            echo "请输入反馈内容。";
        }
        ?>
    </body>
</html>
