<?php
include "db_connection.php";

$json = array();

$sql = "SELECT  * FROM data LEFT JOIN users on users.user_id = data.id;";

$list = $db_connect->query($sql);

$no = 0;


while ($data = $list->fetch_assoc()) {


    $no++;


    $json[] = array(
        "no"          => $no,
        "username"    => $data['username'],
        "password"    => $data['password'],
        "usertype"    => $data['usertype'],
        "employee_id" => $data['employee_id'],
        "company"     => $data['company'],
        "department"  => $data['department'],
        "position"    => $data['position'],




    );
    // var_dump($data);
}
echo json_encode($json);
