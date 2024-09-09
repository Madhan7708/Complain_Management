<?php
    include "db.php"; 
if (isset($_POST['approve_user'])) {
    $customer_id = mysqli_real_escape_string($conn, $_POST['user_id']);

    mysqli_begin_transaction($conn);

    // First query: Update the status in complaints_detail table
    $query = "UPDATE complaints_detail SET status='7' WHERE id='$customer_id'";
    $query_run = mysqli_query($conn, $query);

    // Second query: Delete from comments table
    $comment = "DELETE FROM comments WHERE problem_id = '$customer_id'";
    $comment_run = mysqli_query($conn, $comment);

    // Check if both queries ran successfully
    if ($query_run && $comment_run) {
        // Commit transaction if both succeeded
        mysqli_commit($conn);
        echo json_encode(['status' => 200]);
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

if (isset($_POST['save_reason'])) {
    try {
        // Sanitize input values
        $reason = mysqli_real_escape_string($conn, $_POST['reason']);
        $customer_id = mysqli_real_escape_string($conn, $_POST['problem_id']);

        // Start the transaction
        mysqli_begin_transaction($conn);

        // First query: Update the status in complaints_detail table
        $query = "UPDATE complaints_detail SET status='17' WHERE id='$customer_id'";
        $query_run = mysqli_query($conn, $query);

        // Second query: Update the feedback column
        $comment = "UPDATE complaints_detail SET feedback='$reason' WHERE id='$customer_id'";
        $comment_run = mysqli_query($conn, $comment);

        // Third query: Delete from comments table
        $delete_query = "DELETE FROM comments WHERE problem_id='$customer_id'";
        $delete_run = mysqli_query($conn, $delete_query);

        // Check if all queries ran successfully
        if ($query_run && $comment_run && $delete_run) {
            // Commit transaction if all succeeded
            mysqli_commit($conn);
            echo json_encode(['status' => 200,]);
        } else {
            // Rollback if any query fails
            mysqli_rollback($conn);
            throw new Exception('Query Failed: ' . mysqli_error($conn));
        }
    } catch (Exception $e) {
        // Return error response in case of exception
        $res = [
            'status' => 500,
            'message' => 'Error: ' . $e->getMessage()
        ];
        echo json_encode($res);
    }
}
?>