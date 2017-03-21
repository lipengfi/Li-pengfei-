<?php
    require_once '../connect.php';//连接数据库
    $name1="zhangsan";    //此处的$name为想要删除的名字
    $sql="DELETE FROM library WHERE name='$name1'";//调用数据库 删除这个名字
    if(mysqli_query($con, $sql))
    {
        echo "delete ".$name1." success!";  //删除成功
    }
    