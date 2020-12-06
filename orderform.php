<!DOCTYPE html>
<form action="processorder.php" method="post"> <!--将输入内容通过post传递给php-->
<table style="border: 0px;"> <!---->
<tr style="background: #00FF00;"> <!--标签背景颜色-->
  <td style="width: 200px; text-align: center;">类型Item</td> <!--标签宽度以及文本位置-->
  <td style="width: 15px; text-align: center;">数量Quantity</td>
</tr>
<tr>
  <td>Tires数额</td> <!--名称-->
  <td><input type="text" name="tireqty" size="5" maxlength="10" /></td> <!--文本输入，变量名，文本长度，可输入最大长度-->
</tr>
<tr>
  <td>Oil数额</td>
  <td><input type="text" name="oilqty" size="5" maxlength="10" /></td>
</tr>
<tr>
  <td>Spark数额</td>
  <td><input type="text" name="sparkqty" size="5" maxlength="10" /></td>
</tr>
<tr>
  <td>ShipAddr地址</td>
  <td><input type="text" name="ShipAddrqty" size="80" maxlength="55" /></td>
</tr>
<tr>
  <td>如何找到<屠夫网>的？</td>
  <td><select name="find" size="0">
    <option value = "a">我是常客</option>
    <option value = "b">电视广告</option>
    <option value = "c">手机广告</option>
    <option value = "d">朋友介绍</option>
  </select>
  </td>
</tr>
<tr>
  <!--将内容函数提交并跳转到processorder.php-->
  <td colspan="2" style="text-align: center;"><input type="submit" value="提交" /></td>
</tr>
</table>
</form>
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->


