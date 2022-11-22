<?php
include_once 'config.php';

header('Content-Type: application/json');
header('Access-Content-Allow-Methods: GET');
header('Access-Content-Allow-Origin: *');
header('Access-Content-Allow-header: Access-Content-Allow-Header, Content-Type, Access-Content-Allow_Methods, Authorization, X-Requested-With');


if(isset($_GET['search']) && !empty($_GET['search'])){
    $search = $_GET['search']; 
    
    $s = "select * from student_2020 where name like '%{$search}%' or roll like '{$search}' ";
    $q = mysqli_query($con, $s);
    if(mysqli_num_rows($q) > 0){
        $data = mysqli_fetch_all($q, MYSQLI_ASSOC);
        echo json_encode($data, true);
    }
    else{
        echo json_encode(array('data'=>'Not Found', 'status'=>false));
    }
}
else{
    echo json_encode(array('data'=>'Not Found', 'status'=>false));
}