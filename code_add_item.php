<?php

include 'db_connection.php';


// VARIABLES IN ADD ITEM
echo $item_code = $_POST['item_code'];
echo $quantity = $_POST['quantity'];
echo $unit = $_POST['unit'];
echo $item_desc = $_POST['item_desc'];


$query = "INSERT INTO  items (item_code, quantity, unit, item_desc) 
                            VALUES
                                ('$item_code', '$quantity', '$unit', '$item_desc')";

$result = mysqli_query($db_connect, $query);
