<?php
    //创建变量
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $feedback=trim($_POST['feedback']);
    //设置静态信息
    $toaddress="EternalNightYeah@Yeah.net"; //收到邮件地址
    $subject="Feedback from web site";
    $mailcontent="Customer name: ".str_replace("\r\n", "", $name)."\n".
            "Customer email: ".str_replace("\r\n", "", $email)."\n".
            "Customer comments:\n".str_replace("\r\n", "", $feedback)."\n";
    $fromaddress="from: EternalNightYeah@Yeah.net"; //收到邮件地址
    //引用email()函数发送邮件,linux要安装snedmail到/sbin, sudo apt install sendmail
    //sudo apt-get install sendmail-cf;  systemctl restart sendmail;
    mail($toaddress, $subject, $mailcontent, $fromaddress);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>屠夫网-反馈提交</title>
    </head>
    <body>
        <h1>握着玫瑰的屠夫-反馈后台</h1>
        <p>已经成功发送邮件</p>
        <p><?php echo nl2br(htmlspecialchars($feedback)); ?> </p>
    </body>
</html>
