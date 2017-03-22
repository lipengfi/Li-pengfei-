<?php
	require_once('config.php');//连接数据库
	if(!($con = mysqli_connect(HOST, USERNAME, PASSWORD,"test"))){
		echo mysqli_error();
	}
	if(!mysqli_select_db($con,'test')){
		echo mysqli_error();
	}
	if(!mysqli_query($con,'set names gb2312')){//名字输入成中文
		echo mysqli_error();
	}
?>