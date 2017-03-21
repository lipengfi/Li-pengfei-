<?php
    require_once '../connect.php';//连接数据库
    $sql="SELECT * FROM library";
    $temp=mysqli_query($con, $sql);//$temp是个mysqli_result类型的变量
    while($row=mysqli_fetch_assoc($temp))//通过mysqli_fetch_assoc可以将放在$temp中的id,name,content,price拿出来，每次取出来一行
    {
         $data[]=$row //将每次取出来的一行数据放到$data数组当中;
    }
    foreach($data as $everyData) //将$data中的每个元素$everyData中的name和price属性输出出来
    {
        echo $everyData['name'].": ".$everyData['price'];
        echo "<br>";
    }