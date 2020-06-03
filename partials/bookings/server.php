<?php
// connect db
include_once __DIR__ . '/../database.php';
// utilities
include_once __DIR__. '/../functions.php';

// Qeuery prenotazioni

$bookings = getAll($conn, 'prenotazioni');