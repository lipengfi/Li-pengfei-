<?php
    require_once '../connect.php';//连接数据库
    $name=$_POST['name'];//输入名字。并将输入的名字赋值给变量$name
    $content=$_POST['content'];//输入字符串 ，并将输入额字符串赋值给$content
    $price=$_POST['price'];//输入价格，并将输入的价格赋值给$price
    echo $name; //输出名字
    $sql="INSERT INTO library(name,content,price) VALUES('$name','$content',$price)"; //将变量的值传输给数据库
//     if(mysqli_query($con, $sql))
//     {
//         echo "success!";
//     }
    if(mysqli_query($con,$sql)){
        echo "<script>alert('add success!');window.location.href='manage.php';</script>";//添加成功
    }else{
        echo "<script>alert('add failed!');window.location.href='manage.php';</script>";//添加失败
    
    }