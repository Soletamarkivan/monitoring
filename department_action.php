<?php
require 'db_connection.php';

$sql = "SELECT * FROM department WHERE company_id='" . $_POST['company_id'] . "'";
$result = mysqli_query($db_connect, $sql);
echo '<option value = "">Please choose an Department</option>';
while ($row = mysqli_fetch_array($result)) {
    echo '<option value="' . $row["id"] . '">' . $row["department_name"] . '</option>';
}
