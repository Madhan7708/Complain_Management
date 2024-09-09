<?php
include("db.php");

if (isset($_POST['save_query'])) {
    try {


        // Insert new record
        $p_id = mysqli_real_escape_string($conn, $_POST['id']);
        // Check if there is an existing record
        $checkQuery = "SELECT * FROM manager WHERE id='$p_id'";
        $result = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($result) > 0) {
            // Update existing record
            if (mysqli_query($conn, $checkQuery)) {
                $res = [
                    'status' => 200,
                    'message' => 'Details Updated Successfully'
                ];
            } else {
                throw new Exception('Update Query Failed: ' . mysqli_error($conn));
            }
        } else {
            $query = mysqli_real_escape_string($conn, $_POST['comment_query']);
            $insertQuery = "INSERT INTO manager (comment_query) VALUES ('$query')";
            if (mysqli_query($conn, $insertQuery)) {
                $res = [
                    'status' => 200,
                    'message' => 'Details Inserted Successfully'
                ];
            } else {
                throw new Exception('Insert Query Failed: ' . mysqli_error($conn));
            }
        }

        echo json_encode($res);
    } catch (Exception $e) {
        $res = [
            'status' => 500,
            'message' => 'Error: ' . $e->getMessage()
        ];
        echo json_encode($res);
    }
}
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
?>
