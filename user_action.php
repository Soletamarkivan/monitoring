<?php
require 'db_connection.php';

$sql = "SELECT * FROM data WHERE company_id ='" . $_POST['company_id'] . "' AND department_id ='" . $_POST['department_id'] . "'";
$result = mysqli_query($db_connect, $sql);
echo '<option value = "">Please choose an Department</option>';
while ($row = mysqli_fetch_array($result)) {
    echo '<option value="' . $row["id"] . '">' . $row["username"] . '</option>';
}
