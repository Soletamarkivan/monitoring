<?php
include "db_connection.php";

$json = array();

$sql = "SELECT  data.id,
                data.username,
                data.password,
                data.employee_id,
                company.company_name,
                department.department_name,
                position.position,
                access.access_name
                    FROM data 
                        
                        LEFT JOIN company on data.company_id       = company.id
                        LEFT JOIN department on data.department_id = department.id
                        LEFT JOIN position on data.position_id     = position.id
                        LEFT JOIN access on data.access_id         = access.id";

$list = $db_connect->query($sql);

$no = 0;


while ($data = $list->fetch_assoc()) {


    $no++;


    $json[] = array(
        "no"              => $no,
        "username"        => $data['username'],
        "password"        => $data['password'],
        "access_name"     => $data['access_name'],
        "employee_id"     => $data['employee_id'],
        "company_name"    => $data['company_name'],
        "department_name" => $data['department_name'],
        "position"        => $data['position']




    );
    // var_dump($data);
}
echo json_encode($json);
