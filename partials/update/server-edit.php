<?php 
// connect to db
include_once __DIR__ . '/../database.php';

// get room to edit
if (! empty($_GET['id'])) {

    $id_room = $_GET['id'];

    // query
    $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $room = $result->fetch_assoc();
    } else {
        die('id non esistente');
    }


} else {

    die('impossibile ottenere la stanza da editare');
}



// close connection
$conn->close();