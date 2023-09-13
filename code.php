<?php

include 'db_connection.php';



echo $username = $_POST['username'];
echo $password = $_POST['password'];
echo $usertype = $_POST['usertype'];


$query = "INSERT INTO data (username, password, usertype) VALUES ('$username', '$password', '$usertype')";
mysqli_query($db_connect, $query);
