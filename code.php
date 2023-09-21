<?php

include 'db_connection.php';


echo $first_name  = $_POST['first_name'];
echo $middle_name = $_POST['middle_name'];
echo $last_name   = $_POST['last_name'];
echo $email       = $_POST['email'];
echo $username    = $_POST['username'];
echo $password    = $_POST['password'];
echo $employee_id  = $_POST['employee_id'];
echo $company     = $_POST['company'];
echo $department  = $_POST['department'];
echo $position    = $_POST['position'];
echo $usertype    = $_POST['usertype'];





// $query = "INSERT INTO data (username, password, usertype, equipments, equipments_type, status) 
//             VALUES 
//         ('$username', '$password', '$usertype', '$equipments', '$equipments_type', '$status')";

// mysqli_query($db_connect, $query);

$query = "INSERT INTO data (username, password, usertype) 
            VALUES 
        ('$username', '$password', '$usertype')";



$save = mysqli_query($db_connect, $query);

if ($save == true) {

    $lastID = mysqli_insert_id($db_connect);
    // INSERT INTO `users`( `user_id`, `first_name`, `middle_name`, `last_name`, `email`, `employee_id`, `company`, `department`, `position`) VALUES ('1','1','1','1','1','1','1','1','1')


    $query2 = " INSERT INTO `users`( `user_id`, `first_name`, `middle_name`, `last_name`, `email`, `employee_id`, `company`, `department`, `position`) VALUES ('$lastID','$first_name','$middle_name','$last_name','$email','$employee_id','$company','$department','$position')";

    // $query2 = "INSERT INTO users (user_id, first_name, middle_name, last_name, email, employee_id, company, department, position) VALUES ('$lastID', '$first_name', '$middle_name', '$last_name','$email','$employee_id','$company','$department','$position')";
    // print_r($query2);
    // 
    mysqli_query($db_connect, $query2);
}
