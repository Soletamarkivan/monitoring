<?php
$notif = '';



if (isset($_POST['login_btn'])) {


    $username = $_POST['txt_username'];
    $pass = $_POST['txt_password'];

    if ($username && $pass) {

        $result = mysqli_query($db_connect, "SELECT * FROM data LEFT JOIN usertype_table on data.usertype   WHERE username='$username' AND password='$pass'");


        if ($row = mysqli_fetch_array($result)) {

            $_SESSION['usertype'] = $row['usertype'];
            // $_SESSION['usertype'] = $row['access'];

            if ($row['usertype'] == "admin") {
                header('location: admin_page.php');
            } else if ($row['usertype'] == "supervisor") {
                header('location: supervisor_page.php');
            }
        } else {

            $notif = '<p class="text-danger text-center">Wrong Username or Password</p>';
            // die();
        }
    } else {

        $notif = '<p class="text-danger text-center">Required All Fields</p>';
    }
}
