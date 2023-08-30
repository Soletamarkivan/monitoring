<?php
$notif = '';



if (isset($_POST['login_btn'])) {


    $uname = $_POST['txt_username'];
    $pass = $_POST['txt_password'];

    if ($uname && $pass) {

        $result = mysqli_query($conn, "SELECT * FROM data  WHERE uname='$uname' AND password='$pass'");


        if ($row = mysqli_fetch_array($result)) {

            $_SESSION['uname'] = $row['uname'];
            $_SESSION['usertype'] = $row['access'];

            if ($row['access'] == "admin") {
                header('location: admin_page.php');
            } else if ($row['access'] == "user") {
                header('location: user_page.php');
            }
        } else {

            $notif = '<p class="text-danger text-center">Wrong Username or Password</p>';
            // die();
        }
    } else {

        $notif = '<p class="text-danger text-center">Required All Fields</p>';
    }

}
