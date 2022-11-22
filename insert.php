<?php
include_once 'config.php';

header('Content-Type: application/json');
header('Access-Content-Allow-Methods: POST');
header('Access-Content-allow-Origin: *');
header('Access-Content-Allow-Header: Access-Content-Allow-Header, Content-Type, Access-Content-Allow-Methods, authorization, X-Requested-With');


$data = json_decode(file_get_contents('php://input'), true);
// $id = $id['sid'];
$name = $data['sname'];
$phone = $data['sphone'];
$roll = $data['sroll'];
$regis = $data['sregis'];
$group = $data['sgroups'];
$father = $data['sfather'];
$mother = $data['smother'];

$u = "insert into student_2020 (name, phone, roll, regis, groups, father, mother) values ('{$name}', '{$phone}','{$roll}','{$regis}','{$group}','{$father}', '{$mother}') ";

$q = mysqli_query($con, $u);

if($q){
    echo json_encode(array('data'=>'inert', 'status'=>true));
}
else{
    echo json_encode(array('data'=>'not insert', 'status'=>false));
}


