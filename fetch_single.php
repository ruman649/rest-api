<?php
include_once 'config.php';

header("Content-Type:application/json");
header("Access-Content-Allow-Origin: *");
// header('Access-Content-Allow-Methods:put, get, post, delete')
// header('Access-Content-Allow-header:')

$arr = json_decode(file_get_contents('php://input'), true);
$s_id = $arr['sid'];

$s = "select * from student_2020 where id={$s_id}";
$q = mysqli_query($con, $s);

if (mysqli_num_rows($q) > 0) {
    $data = mysqli_fetch_all($q, MYSQLI_ASSOC);
    echo json_encode($data);
} else {
    echo json_encode(array('data'=>'not found', 'status'=>false));
}
