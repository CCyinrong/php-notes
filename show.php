<html>
<head>
	<title>我的留言板</title>
	<script>
		function dodel(id){
			if(confirm("确定要删除吗？")){
				window.location='del.php?id='+id;
			}
		}

	</script>
</head>
<body>
	<center>
		<?php include("nav.php");?>
		<h3>查看留言</h3>
		<table border="1" width="700">
			<tr>
				<th>留言标题</th>
				<th>留言人</th>
				<th>留言内容</th>
				<th>IP地址</th>
				<th>留言时间</th>
				<th>操作</th>
			</tr>
			<?php
				//获取留言信息，解析输出到表格中
				//1、从liuyan.txt文件中获取留言信息
					$info=file_get_contents("liuyan.txt");
					
				//2、取出留言内容最后的三个@@@符号
					$info=rtrim($info,"@");//rtrim() 函数移除字符串右侧的空白字符或其他预定义字符。
				if(strlen($info)>8){	
				//3、以@@@符号拆分留言信息为一条一条的
					$lylist=explode("@@@",$info);

				//4、遍历留言信息数组
					foreach($lylist as $k=>$v){
						$ly=explode("##",$v);
						echo "<tr>";
						echo "<td>{$ly[0]}</td>"; 
						echo "<td>{$ly[1]}</td>";
						echo "<td>{$ly[2]}</td>";
						echo "<td>{$ly[3]}</td>";
						echo "<td>".date("Y-m-d H:i:s",$ly[4]+8*3600)."</td>";
						echo "<td><a href='javascript:dodel({$k})'>删除</a></td>";//echo "<td><a href='del.php?id={$k}'>删除</a></td>";
						echo "</tr>";
					}
				}
			?>
		</table>
	</center>
</body>
</html>
