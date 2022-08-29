<?php
$mysqli = new mysqli("localhost","root","","wdpf51");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Turn autocommit off
$mysqli->autocommit(FALSE);
$mysqli->startTransaction;
// Insert some values
$mysqli->query(
    "INSERT INTO student_info VALUES 
(NULL, 113, 'Bellayat', 'Maths', 60, '01485522')"
);

// Commit transaction
if (!$mysqli->commit()) {echo "Commit transaction failed";
  exit();
}

// Rollback transaction
$mysqli->rollback();

$mysqli -> close();
?>