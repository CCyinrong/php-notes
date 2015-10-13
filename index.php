<html>
<head>
	<title>我的留言板</title>
</head>
<body>
	<center>
		<?php include("nav.php");?>
		<h3>添加留言</h3>
		<form action="doAdd.php" method="post">
			<table width="380" border="0" cellpadding="4">
				<tr>
					<td align="right">标题：</td>
					<td><input type="text"name="title"/></td>
				</tr>
				<tr>
					<td align="right">留言者：</td>
					<td><input type="text" name="author"/></td>
				</tr>
				<tr>
					<td align="right" valign="top">留言内容：</td>
					<td><textarea name="content" id="" cols="30" rows="5"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" vlaue="提交"/>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="reset" vlaue="重置"/>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
