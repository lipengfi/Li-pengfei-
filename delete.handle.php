<?php
    require_once '../connect.php';//�������ݿ�
    $name1=$_GET['name'];    //�˴���$nameΪ��Ҫɾ��������
    $sql="DELETE FROM library WHERE name='$name1'";//�������ݿ� ɾ���������
    if(mysqli_query($con, $sql))
    {
        echo "<script>alert('delete success!');window.location.href='add.php';</script>";//ɾ���ɹ�������ת��add.php
    }else{
        echo "<script>alert('delete failed!');window.location.href='add.php';</script>";//ɾ��ʧ��
    }
    ?>
    