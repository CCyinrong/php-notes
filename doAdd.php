<html>
<head>
	<title>我的留言板</title>
</head>
<body>
	<center>
		<?php include("nav.php");?>
		<?php
			//执行留言信息添加操作
			//1、获取要添加的留言信息，并且补上其他辅助信息（ip地址、添加留言的时间）
				$title=$_POST["title"];
				$author=$_POST["author"];
				$content=$_POST["content"];
				$ip=$_SERVER['REMOTE_ADDR'];
				$addtime=time();
			//2、拼接留言信息
				$ly="{$title}##{$author}##{$content}##{$ip}##{$addtime}@@@";
				//echo $ly;
			//3、将留言信息追加到liuyan.txt文件中
				$info=file_get_contents("liuyan.txt");
				file_put_contents("liuyan.txt",$info.$ly);
			//4、输出留言成功
				echo "留言成功！谢谢！";
		?>
	</center>
</body>
</html>
