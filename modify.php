<?php
    require_once '../connect.php';//�������ݿ�
    $name=$_GET['name'];//����һ�����ָ�ֵ�� $name
    $content=$_GET['content'];//����һ���¼�����ֵ��$content
    $sql="UPDATE library SET content='content ' WHERE name='$name'";
    if(mysqli_query($con, $sql))
    {
        echo "modify success!";//�ɹ�
    }