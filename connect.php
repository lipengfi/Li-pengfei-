<?php
	require_once('config.php');//�������ݿ�
	if(!($con = mysqli_connect(HOST, USERNAME, PASSWORD,"test"))){
		echo mysqli_error();
	}
	if(!mysqli_select_db($con,'test')){
		echo mysqli_error();
	}
	if(!mysqli_query($con,'set names gb2312')){//�������������
		echo mysqli_error();
	}
?>