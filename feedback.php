<!DOCTYPE html>
<html>
    <head>
        <title>屠夫网-客户反馈</title>
    </head>
    <body>
        <h1>握着玫瑰的屠夫-客户反馈</h1>
        <p>请告诉我们，你想反馈的问题</p>
        <form action="process_feedback.php" method="post">
        <table style="border: 0xp">
        <tr>
            <td>你的名称</td>
            <td><input type="text" name="name" size=15 maxlength="5"></td>
        </tr>
        <tr>
            <td>你的Email地址</td>
            <td><input type="text" name="email" size=15 maxlength="25"></td>
        </tr>
        <tr>
            <td>你所要反馈的内容</td>
            <td><input type="text" name="feedback" size=20 maxlength="200"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;"><input type="submit" value="提交" /></td>
        </tr>
        </table>
        </form>
    </body>
</html>
