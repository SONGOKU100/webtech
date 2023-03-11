<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form data
        $email = $_POST['email'];
        $userpassword = $_POST['password'];
 
        // Connect to database
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'webdb';
        $connection = mysqli_connect($host, $user, $password, $database);
 
        // Check connection
        if (mysqli_connect_errno()) {
            echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
            exit();
        }
 
        // Insert data into database
        $query = "INSERT INTO users ( Email, Password) VALUES ('$email', '$userpassword')";
        if (mysqli_query($connection, $query)) {
            $response = array('status' => 'success', 'message' => 'Data saved to database.');
        } else {
            $response = array('status' => 'error', 'message' => 'An error occurred while saving data to database.');
        }
 
        // Close database connection
        mysqli_close($connection);
 
        // Send JSON response
        header('Content-type: application/json');
        echo json_encode($response);
        exit();
    }
    ?>
