<?php
include_once'config30.php';
?>

<?php

// sql to delete a record
$sql = "DELETE FROM details ";

if ($conn->query($sql) === TRUE) {
  echo "<br/>Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
