<?php
header('Content-Type: application/json');
include 'db.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Initialize response array
    $response = array();

    // Fetch total complaints
    $q1 = "SELECT COUNT(*) as complain FROM complaints_detail WHERE status > 0";
    $o1 = mysqli_query($conn, $q1);
    $r1 = mysqli_fetch_assoc($o1);
    $response['complainCount'] = $r1['complain'];

    // Fetch completed complaints
    $q2 = "SELECT COUNT(*) as completed FROM complaints_detail WHERE status = '13'";
    $o2 = mysqli_query($conn, $q2);
    $r2 = mysqli_fetch_assoc($o2);
    $response['completedCount'] = $r2['completed'];

    // Fetch in-progress complaints
    $q3 = "SELECT COUNT(*) as inprogress FROM complaints_detail WHERE status = '10'";
    $o3 = mysqli_query($conn, $q3);
    $r3 = mysqli_fetch_assoc($o3);
    $response['inprogressCount'] = $r3['inprogress'];

    // Fetch pending status
    $q4 = "SELECT COUNT(*) as pending FROM complaints_detail WHERE status ='7'";
    $o4 = mysqli_query($conn, $q4);
    $r4 = mysqli_fetch_assoc($o4);
    $response['pendingCount'] = $r4['pending'];

    // Fetch request count
    $q5 = "SELECT COUNT(*) as request FROM complaints_detail WHERE status ='6'";
    $o5 = mysqli_query($conn, $q5);
    $r5 = mysqli_fetch_assoc($o5);
    $response['requestCount'] = $r5['request'];

    // Fetch reassigned work
    $q6 = "SELECT COUNT(*) as reassign FROM complaints_detail WHERE status ='14'";
    $o6 = mysqli_query($conn, $q6);
    $r6 = mysqli_fetch_assoc($o6);
    $response['reassignCount'] = $r6['reassign'];

    // Query to get counts of each type_of_problem for pending problems where status 7,10
    $q7 = "SELECT type_of_problem, COUNT(*) as count 
       FROM complaints_detail
       WHERE status IN ('7', '10','17') 
       GROUP BY type_of_problem";
    $o7 = $conn->query($q7);

    //  pie chart count to display Initialize an array to store type_of_problem counts
    $typeOfProblemCount = array();
    while ($r7 = $o7->fetch_assoc()) {
        $typeOfProblemCounts[] = $r7;
    }
    $response['typeOfProblemCounts'] = $typeOfProblemCounts;

    // Return the full response as a JSON object
    echo json_encode($response);
} else {
    echo json_encode(array("error" => "Invalid request method."));
}
?>
