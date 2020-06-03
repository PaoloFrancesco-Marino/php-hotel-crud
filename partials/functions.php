<?php
/**
 * Functions
 */

// get all records
function getAll($conn, $table) {
    // Otieni lista stanze homepage
    $sql = "SELECT * FROM `$table`"; //stringa definizione comando
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $records = [];
        while ($row = $result->fetch_assoc()) {

            // popolo array
            $records[] = $row;
        }

    } elseif ($result) {
        $records = [];
    } else {
        $records = false;
    }


    // close db connection
    $conn->close();

    return $records;
}

// get a single records by id
function getById($conn, $table, $id) {
    // query selected room
    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);

    if ($conn && $result->num_rows > 0) {
        $record = $result->fetch_assoc();
    }  elseif ($result) {
        $record = [];
    } else {
        $record = false;
    }


    // close connection
    $conn->close();

    return $record;
}

// delete a records by id
function deleteById($conn, $table, $id, $url) {
    // Query Delete
    $sql = "DELETE FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);

    if ($result && $conn->affected_rows > 0) {
        // redirect
        header("Location: $url?del=1");
    } elseif ($result) {
        die('Nessuna stanza trovata');
    } else {
        die('Si è vericato un errore');
    }

    // close connection
    $conn->close();
}