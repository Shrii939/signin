<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in; if not, redirect to the sign-in page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: signin.php");
    exit();
}

// Get the username of the logged-in user from the session
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; // Default to 'Guest' if username not set
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/dashboard.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is your dashboard. You can add content, display user-specific information, or provide navigation links here.</p>
    
    <!-- Example: Logout link -->
    <a href="logout.php">Logout</a> <!-- Create a logout.php file to handle logout functionality -->

    <!-- Add more content or links as per your application's requirements -->
</body>
</html>
