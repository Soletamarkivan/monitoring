



<?php
require 'db_connection.php';

$sql = "SELECT department_name  FROM users LEFT JOIN department on users.department_id = department.id WHERE department.department_name LIKE '%warehouse%'";
$result = mysqli_query($db_connect, $sql);
echo '<option value = "">Please choose an Department</option>';
while ($row = mysqli_fetch_array($result)) {
    echo '<option value="' . $row["id"] . '"></option>';
}
