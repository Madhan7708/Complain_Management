<?php
    include "db.php"; 

    //requirements approved
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

//requirements rejected

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

 //comments query

if (isset($_POST['edit_user'])) {
    $customer_id = mysqli_real_escape_string($conn, $_POST['user_id']);
  
    $query = "SELECT * FROM manager WHERE task_id='$customer_id'";
    $query_run = mysqli_query($conn, $query);
  
    $User_data = mysqli_fetch_array($query_run);
  
  
    if ($query_run) {
      $res = [
        'status' => 200,
        'message' => 'details Fetch Successfully by id',
        'data' => $User_data,
        'readonly' => !empty($User_data['comment_query'])
    ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
  }
  
  //User edit
  if (isset($_POST['save_edituser'])) {
    $customer_id = mysqli_real_escape_string($conn, $_POST['task_id']);
    $query = mysqli_real_escape_string($conn, $_POST['comment_query']);
    $reply = mysqli_real_escape_string($conn, $_POST['comment_reply']);
  
    $query = "UPDATE manager SET comment_query='$query' WHERE task_id='$customer_id'";
    $query_run = mysqli_query($conn, $query);
  
    if ($query_run) {
      $res = [
        'status' => 200,
        'message' => 'details Updated Successfully'
    ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
  }


  //get image
  if (isset($_POST['get_image'])) {
    $user_id = $_POST['user_id'];

    // Query to fetch the image based on user ID
    $query = "SELECT id, images FROM complaints_detail WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode(['status' => 200, 'data' => $row]);
    } else {
        echo json_encode(['status' => 500, 'message' => 'Image not found']);
    }

    $stmt->close();
    $conn->close();
}



//set color in inprogress work
if (isset($_POST['id'])) {
    $complaintId = $_POST['id'];
    
    // Fetch the complaint description based on the ID
    $sql = "SELECT problem_description FROM complaints_detail WHERE id = $complaintId";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    // Return the description as the AJAX response
    echo $row['problem_description'];
}

//piechart backend code

header('Content-Type: application/json');
$sql = "SELECT type_of_problem, COUNT(*) as count FROM complaints_detail GROUP BY type_of_problem";
$result = $conn->query($sql);

$data = array();
while($row = $result->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);

//diamond box backend code



?>