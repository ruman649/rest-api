<?php
include_once 'config.php';

header('Content-Type: application/json');
header('Access-Content-Allow-Origin: *');
header('Access-Content-allow-Methods: DELETE');

$data = json_decode(file_get_contents('php://input'), true);
$id = $data['sid'];

$d = "delete from student_2020 where id={$id} ";
$q = mysqli_query($con, $d);

if($q){
    echo json_encode(array('data'=>'successfully delete', 'status'=>true));
}
else{
    echo json_encode(array('data'=>'data not delete', 'status'=>false));
}