<?php
    require_once '../connect.php';//�������ݿ�
    $name="lisi";//��lisi������ָ�ֵ�� $name
    $sql="UPDATE library SET content='content is modified' WHERE name='$name'";
    if(mysqli_query($con, $sql))
    {
        echo "modify success!";//�ɹ�
    }