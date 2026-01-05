<?php
// Include your database configuration
// Path assumes you are in views/teachers/ and db.php is in config/
require_once '../../config/db.php'; 

if (isset($_POST['save'])) {
    // 1. Capture and sanitize data
    $name = mysqli_real_escape_string($conn, $_POST['save']);

    // 2. Insert into database
    $sql = "INSERT INTO teachers (name) VALUES ('$name')";
    
    if (mysqli_query($conn, $sql)) {
        // 3. Success! Redirect to teacher.php
        header("Location: views/teachers/teacher.php?msg=added");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>