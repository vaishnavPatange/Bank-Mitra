<?php


include('connection.php');

function getCurrentUserId() {
    // Start the session
    session_start();

    // Check if the user's ID is stored in the session
    if (isset($_SESSION['username'])) {
        // Return the user's ID from the session
        return $_SESSION['username'];
    }

    // If the user's ID is not in the session, return null
    return null;
}


// Check if the user is an admin
if (getCurrentUserId()) {
    // Redirect to the admin home page
    header("Location: admin-index.php");
    exit();
} else {
    // Redirect to the normal user home page
    header("Location: ../index.html");
    exit();
}

?>