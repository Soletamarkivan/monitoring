<?php
require 'db_connection.php';

$sql    = "SELECT * FROM users LEFT JOIN  
department on users.department_id = department.id  WHERE department.id='" . $_POST['borrower_id'] . "'";
print_r($sql);
$result = mysqli_query($db_connect, $sql);
echo '<option value = "">Choose Position</option>';
while ($row = mysqli_fetch_array($result)) {
    echo '<option value="' . $row["id"] . '"> ' . $row["first_name"] . ' ' . $row['last_name'] . ' </option>';
}
