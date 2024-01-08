<?php
require "../../conn.php";

$sql = "SELECT * FROM `green_pharma` ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Output JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
