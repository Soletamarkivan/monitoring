<?php
require 'db_connection.php';

$sql    = "SELECT * FROM `item_code_msc` LEFT JOIN item_desc_msc on item_code_msc.item_desc_id = item_desc_msc.id WHERE item_desc_msc.id = '" . $_POST['item_desc_id'] . "' ";
// print_r($sql);
$result = mysqli_query($db_connect, $sql);
echo '<option value = "">Choose Position</option>';
while ($row = mysqli_fetch_array($result)) {
    echo '<option value="' . $row["id"] . '"> ' . $row["item_desc_name"] . '  </option>';
}
