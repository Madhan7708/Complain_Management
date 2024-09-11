<?php
header('Content-Type: application/json');
include('db.php');
// Query to get counts of each type_of_problem
$sql1 = "SELECT type_of_problem, COUNT(*) as count FROM complaints_detail GROUP BY type_of_problem";
$result = $conn->query($sql1);

$data = array();
while($row = $result->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);


?>
