<?php
    require_once '../connect.php';//�������ݿ�
    $name1="zhangsan";    //�˴���$nameΪ��Ҫɾ��������
    $sql="DELETE FROM library WHERE name='$name1'";//�������ݿ� ɾ���������
    if(mysqli_query($con, $sql))
    {
        echo "delete ".$name1." success!";  //ɾ���ɹ�
    }
    