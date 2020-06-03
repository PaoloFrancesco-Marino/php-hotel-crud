<?php 

// connect db
include_once __DIR__ . '/../database.php';
// utilities
include_once __DIR__. '/../functions.php';

// GET room ID
if (empty($_POST['id'])) {
    die('Operazione non eseguibile');
}

$id_room = $_POST['id'];
$url = "$base_path?-del=room";

// // Query Delete
// $sql = "DELETE FROM `stanze` WHERE `id` = $id_room";
// $result = $conn->query($sql);

// if ($result && $conn->affected_rows > 0) {
//     // redirect
//     header("Location: $base_path?del=1");
// } elseif ($result) {
//     echo 'Nessuna stanza trovata';
// } else {
//     echo 'Si è vericato un errore';
// }

/**
 * add fucntions
*/

deleteById($conn, 'stanze', $id_room, $url);