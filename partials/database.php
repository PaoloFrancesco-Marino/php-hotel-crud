<?php 

include __DIR__ . '/../env.php';

// Connection
$conn = new mysqli($server_name, $username, $password, $db_name);

// check connection
if ($conn && $conn->connect_error) {
    die('si è verifato un errore');
}

