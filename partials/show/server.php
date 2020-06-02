<?php 
// connect db
include __DIR__ . '/../database.php';

// get room ID
$id_room = $_GET['id'];

// query selected room
$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);

if ($conn && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
}  elseif ($result) {
    echo 'No results'; 
} else {
    echo 'Connessione non disponibile';
}


// close connection
$conn->close();