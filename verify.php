<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'create_database'); // Update with your credentials

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the token is provided in the URL
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Prepare a statement to find a user with the provided token
    $stmt = $conn->prepare("SELECT id, is_verified FROM users WHERE verification_token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Check if the user is already verified
        if ($user['is_verified'] == 0) {
            // Update the user's status to verified
            $update_stmt = $conn->prepare("UPDATE users SET is_verified = 1, verification_token = NULL WHERE id = ?");
            $update_stmt->bind_param("i", $user['id']);
            if ($update_stmt->execute()) {
                echo "Your email has been successfully verified. You can now <a href='login.php'>log in</a>.";
            } else {
                echo "Error updating verification status. Please try again later.";
            }
            $update_stmt->close();
        } else {
            echo "Your email is already verified. You can now <a href='login.php'>log in</a>.";
        }
    } else {
        echo "Invalid or expired verification link.";
    }
    $stmt->close();
} else {
    echo "No verification token provided.";
}

$conn->close();
?>
