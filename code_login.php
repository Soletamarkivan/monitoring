<?php

$notif = '';



if (isset($_POST['login_btn'])) {


    $username = $_POST['txt_username'];
    $pass = $_POST['txt_password'];

    if ($username && $pass) {

        $result = mysqli_query($db_connect, "SELECT * FROM data LEFT JOIN access on data.access_id = access.id WHERE username='$username' AND password='$pass'");


        if ($row = mysqli_fetch_array($result)) {

            $_SESSION['access_id'] = $row['access_id'];
            // $_SESSION['usertype'] = $row['access'];

            if ($row['access_id'] == "1") {
                header('location: admin_page.php');
            } else if ($row['access_id'] == "manager") {
                header('location: 2.php');
            } else if ($row['access_id'] == "it_support") {
                header('location: 3.php');
            } else if ($row['access_id'] == "user") {
                header('location: 4.php');
            }
        } else {

            $notif = '<p class="text-danger text-center">Wrong Username or Password</p>';
            // die();
        }
    } else {

        $notif = '<p class="text-danger text-center">Required All Fields</p>';
    }
}
