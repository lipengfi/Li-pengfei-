<?php
    require_once '../connect.php';//�������ݿ�
    $sql="SELECT * FROM library";
    $temp=mysqli_query($con, $sql);//$temp�Ǹ�mysqli_result���͵ı���
    while($row=mysqli_fetch_assoc($temp))//ͨ��mysqli_fetch_assoc���Խ�����$temp�е�id,name,content,price�ó�����ÿ��ȡ����һ��
    {
         $data[]=$row //��ÿ��ȡ������һ�����ݷŵ�$data���鵱��;
    }
    foreach($data as $everyData) //��$data�е�ÿ��Ԫ��$everyData�е�name��price�����������
    {
        echo $everyData['name'].": ".$everyData['price'];
        echo "<br>";
    }