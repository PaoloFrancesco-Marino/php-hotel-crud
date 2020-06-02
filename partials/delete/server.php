<?php 

// connect db
include_once __DIR__ . '/../database.php';
// GET room ID
if (empty($_POST['id'])) {
    die('Operazione non eseguibile');
}

$id_room = $_POST['id'];

// Query Delete
$sql = "DELETE FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);

if ($result && $conn->affected_rows > 0) {
    // redirect
    header("Location: $base_path?del=1");
} elseif ($result) {
    echo 'Nessuna stanza trovata';
} else {
    echo 'Si è vericato un errore';
}