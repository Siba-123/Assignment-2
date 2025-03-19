<?php
// Establish database connection
$con = mysqli_connect("localhost", "root", "", "sibas");
if ($con === false) {
    echo "Not connected";
    // Stop further execution if connection fails
    exit;
} else {
    echo "Database connected successfully\n    ";
}

// Retrieve form data
$name = $_POST["name"];
$phone = $_POST["phone"];
$feedback = $_POST["feedback"];
$email = $_POST["email"];

// Check if the table already exists
$tableExistsQuery = "SHOW TABLES LIKE 'siba'";
$tableExistsResult = mysqli_query($con, $tableExistsQuery);

if (mysqli_num_rows($tableExistsResult) == 0) {
    // Table does not exist, create it
    $dbcrt = "CREATE TABLE siba (
        name VARCHAR(100),
        email VARCHAR(100),
        phone INT,
        feedback VARCHAR(255)
    )";
    $exct = mysqli_query($con, $dbcrt);

    if ($exct) {
        echo "Database created successfully!     ";
    } else {
        echo "Error: " . mysqli_error($con);
        exit;
    }
}

// Insert data into the database
$query = "INSERT INTO siba (`name`, `email`, `phone`, `feedback`) VALUES ('$name', '$email', '$phone', '$feedback');";
$rs = mysqli_query($con, $query);

if ($rs) {
    echo "Value inserted successfully!";
} else {
    echo "Error: " . mysqli_error($con);
    exit;
}

// Close the database connection
mysqli_close($con);
?>