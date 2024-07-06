<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imageData = $_POST['imageData'];
    $voterId = $_POST['voterId'];

    // Replace this with your actual database connection code
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'ovs';

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Placeholder for actual face verification against the database
    // Assume verification is successful for testing
    $verificationResult = verifyFace($imageData, $voterId, $conn);

    if ($verificationResult) {
        $response = ['status' => 'success', 'message' => 'Face verification successful.'];
        echo json_encode($response);
    } else {
        $response = ['status' => 'failure', 'message' => 'Face verification failed.'];
        echo json_encode($response);
    }

    $conn->close();
} else {
    http_response_code(400);
    echo 'Invalid request';
}

function verifyFace($imageData, $voterId, $conn) {
    // Replace this with your actual face verification logic against the database
    // Compare $imageData and $voterId with the data in the register_voter table

    // Sample query (replace with your actual query)
    $sql = "SELECT Photo FROM register_voter WHERE Voter_ID = '$voterId' AND face_image = '$imageData'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true;  // Face verification successful
    } else {
        return false;  // Face verification failed
    }
}
?>
