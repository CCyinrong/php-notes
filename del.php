<html>
<head>
	<title>我的留言板</title>
</head>
<body>
	<center>
		<?php include("nav.php");?>
		<h3>删除留言</h3>
		<?php
			//执行删除指定id的留言信息
			//1、获取要删除留言的id号
				$id=$_GET["id"];
					
			//2、从liuyan.txt文件中获取留言信息
				$info=file_get_contents("liuyan.txt");
				
			//3、将留言信息以@@@符号拆分成留言数组
				$lylist=explode("@@@",$info);

			//4、使用unset删除指定id的留言
				unset($lylist[$id]);
			//5、还原留言信息为字串，并写回留言文件liuyan.txt
				$ninfo=implode("@@@",$lylist);
				file_put_contents("liuyan.txt",$ninfo);	
				echo "删除成功!";
		?>
	</center>
</body>
</html>
