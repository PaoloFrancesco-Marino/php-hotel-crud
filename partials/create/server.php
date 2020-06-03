<?php
// include database
include_once __DIR__ . '/../database.php';

// check data
if (empty($_POST['room_number']) || empty($_POST['beds']) || empty($_POST['floor']) ) {
    die('non hai inserito i parametri');
}

$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

// insert new room
$sql = "INSERT INTO `stanze` (`room_number`, `beds`, `floor`, `created_at`, `updated_at`)
VALUES (?, ?, ?, NOW(), NOW()) ";

$stmt = $conn->prepare($sql);
$stmt->bind_param('iii', $room_number, $beds, $floor);
$stmt->execute();

if ($stmt && $stmt->insert_id) {
    $id_room = $stmt->insert_id;
    // redirect
    header("Location: $base_path". "show.php?id=$id_room");
} else {
    die('room creation error');
}