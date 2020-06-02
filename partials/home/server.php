<?php
include __DIR__ . '/../database.php';

// Otieni lista stanze homepage
$sql = "SELECT * FROM `stanze`"; //stringa definizione comando
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $rooms = [];
    while ($row = $result->fetch_assoc()) {
    
        // echo "ID: {$row['id']} - Floor: {$row['floor']} '<br>'";

        // popolo array
        $rooms[] = $row;
    }

} elseif ($result) {
    echo 'No results';
} else {
    echo 'Query Error';
}


// close db connection
$conn->close();