


<?php
include "db_connection.php";

$json = array();

$sql = "SELECT * FROM items WHERE id=id";

$list = $db_connect->query($sql);

$no = 0;



while ($data = $list->fetch_assoc()) {
    $div = "<div class='w-25 border'>" . $data['item_desc'] . " </div>";


    $no++;


    $json[] = array(
        "no"              => $no,
        "item_code"        => $data['item_code'],
        "quantity"        => $data['quantity'],
        "unit"     => $data['unit'],
        "item_desc"     =>  $div





    );
    // var_dump($data);
}
echo json_encode($json);
