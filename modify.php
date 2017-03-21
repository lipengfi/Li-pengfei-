<?php
    require_once '../connect.php';//连接数据库
    $name="lisi";//将lisi这个名字赋值给 $name
    $sql="UPDATE library SET content='content is modified' WHERE name='$name'";
    if(mysqli_query($con, $sql))
    {
        echo "modify success!";//成功
    }