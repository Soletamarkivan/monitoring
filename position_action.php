<?php
require 'db_connection.php';

$sql = "SELECT * FROM position WHERE department_id='" . $_POST['department_id'] . "'";
$result = mysqli_query($db_connect, $sql);
echo '<option value = "">Choose Position</option>';
while ($row = mysqli_fetch_array($result)) {
    echo '<option value="' . $row["id"] . '">' . $row["position"] . '</option>';
}
