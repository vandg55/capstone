<?php
// Database connection credentials
$connection = mysqli_connect("localhost", "root", "", "eas_db");
// Get data from the request
$content = $_POST['content'];

// Insert data into the database
$query = "INSERT INTO table_data (content) VALUES ('$content')";
mysqli_query($connection, $query);

mysqli_close($connection);
?>