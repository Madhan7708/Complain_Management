<?php
// get_complaints.php
include 'db.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Fetch total complaints
    $query1 = "SELECT COUNT(*) as complain FROM complaints_detail WHERE status > 0";
    $output1 = mysqli_query($conn, $query1);
    $row1 = mysqli_fetch_assoc($output1);
    $complainCount = $row1['complain'];

    // Fetch completed complaints
    $query2 = "SELECT COUNT(*) as completed FROM complaints_detail WHERE status = '13'";
    $output2 = mysqli_query($conn, $query2);
    $row2 = mysqli_fetch_assoc($output2);
    $completedCount = $row2['completed'];

    //Fetch inprogress completed
    $query3 = "SELECT COUNT(*) as inprogress FROM complaints_detail WHERE status = '10'";
    $output3 = mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($output3);
    $inprogressCount = $row3['inprogress'];

    //fetch pending status
    $query4 = "SELECT COUNT(*) as pending FROM complaints_detail WHERE (status ='1' or status ='2' or status='4' or  status='7' or status='8')";
    $output4 = mysqli_query($conn, $query4);
    $row4 = mysqli_fetch_assoc($output4);
    $pendingCount = $row4['pending'];

    //fetch request count
    $query5 = "SELECT COUNT(*) as request FROM complaints_detail WHERE status ='6'";
    $output5 = mysqli_query($conn, $query5);
    $row5 = mysqli_fetch_assoc($output5);
    $requestCount = $row5['request'];

    //fetch reassigned work

    $query6 = "SELECT COUNT(*) as reassign FROM complaints_detail WHERE status ='14'";
    $output6 = mysqli_query($conn, $query6);
    $row6 = mysqli_fetch_assoc($output6);
    $reassignCount = $row6['reassign'];

    // Return the counts as a JSON object
    echo json_encode(array(
        "complainCount" => $complainCount,
        "completedCount" => $completedCount,
        "inprogressCount" => $inprogressCount,
        "pendingCount" => $pendingCount,
        "requestCount" => $requestCount,
        "reassignCount" => $reassignCount



    ));
} else {
    echo json_encode(array("error" => "Invalid request method."));
}
