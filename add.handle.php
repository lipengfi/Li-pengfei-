<?php
    require_once '../connect.php';//�������ݿ�
    $name=$_POST['name'];//�������֡�������������ָ�ֵ������$name
    $content=$_POST['content'];//�����ַ��� ������������ַ�����ֵ��$content
    $price=$_POST['price'];//����۸񣬲�������ļ۸�ֵ��$price
    echo $name; //�������
    $sql="INSERT INTO library(name,content,price) VALUES('$name','$content',$price)"; //��������ֵ��������ݿ�
//     if(mysqli_query($con, $sql))
//     {
//         echo "success!";
//     }
    if(mysqli_query($con,$sql)){
        echo "<script>alert('add success!');window.location.href='manage.php';</script>";//��ӳɹ�
    }else{
        echo "<script>alert('add failed!');window.location.href='manage.php';</script>";//���ʧ��
    
    }