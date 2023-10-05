<?php
include 'db_connection.php';

$searchTerm = $_GET['term'];
$sql = "SELECT * FROM unit WHERE unit_name LIKE '%" . $searchTerm . "%' LIMIT 10";
$result = $db_connect->query($sql);
// print_r($sql);
$tutorialData = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data['id']    = $row['id'];
        $data['value'] = $row['unit_name'];
        array_push($tutorialData, $data);
        // print_r($tutorialData);
    }
}
echo json_encode($tutorialData);
