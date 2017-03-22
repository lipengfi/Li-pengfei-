<?php
    require_once '../connect.php';//连接数据库
    $name1=$_GET['name'];    //此处的$name为想要删除的名字
    $sql="DELETE FROM library WHERE name='$name1'";//调用数据库 删除这个名字
    if(mysqli_query($con, $sql))
    {
        echo "<script>alert('delete success!');window.location.href='add.php';</script>";//删除成功、并跳转到add.php
    }else{
        echo "<script>alert('delete failed!');window.location.href='add.php';</script>";//删除失败
    }
    ?>
    