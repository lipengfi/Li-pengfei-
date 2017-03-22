<?php
    require_once '../connect.php';//连接数据库
    $name=$_GET['name'];//输入一个名字赋值给 $name
    $content=$_GET['content'];//输入一个事件并赋值给$content
    $sql="UPDATE library SET content='content ' WHERE name='$name'";
    if(mysqli_query($con, $sql))
    {
        echo "modify success!";//成功
    }