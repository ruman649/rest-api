<?php

header('Content-Type:application/json');
// header('Access-Controll-Allow-Methods: ');
header('Access-Controll-Allow-Origin: *');



include_once 'config.php';

$select = "select * from student_2020 ";
$q = mysqli_query($con, $select);

if(mysqli_num_rows($q) > 0){
    $arr = mysqli_fetch_all($q, MYSQLI_ASSOC);
    echo json_encode($arr);
}
else{
    echo json_encode(array('data'=>"not found", 'status'=>false));
}