<?php
include_once 'config.php';

header('Content-Type: application/json');
header('Access-Content-Allow-Methods: PUT');
header('Access-Content-Allow-Origin: *');
header('Access-Content-Allow-Header: Access-Content-Allow-Header,Content-Type,Access-Content-Allow-Methods, authorization, X-Requested-With ');

$data = json_decode(file_get_contents('php://input'), true);
$id = $data['sid'];
$name = $data['sname'];
$phone = $data['sphone'];

$up = "update student_2020 set name='{$name}', phone='{$phone}' where id={$id} ";
$q = mysqli_query($con, $up);

if($q){
    echo json_encode(array('data'=>'updated', 'status'=>true));
}
else{
    echo json_encode(array('data'=>'not updated', 'stautus'=>false));
}