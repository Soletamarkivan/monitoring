<?php
include "db_connection.php";

$json = array();

$sql = "SELECT * FROM data WHERE id=id ";

$list = $db_connect->query($sql);

$no = 0;


while ($data = $list->fetch_assoc()) {


    $no++;


    $json[] = array(
        "no"       => $no,
        "username" => $data['username'],
        "password" => $data['password'],
        "usertype" => $data['usertype']

    );
}
echo json_encode($json);
